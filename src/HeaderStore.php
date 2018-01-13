<?php
/**
 * Http Message - A HTTP Message library that implements the Psr-7 standard
 *
 * @author  panlatent@gmail.com
 * @link    https://github.com/panlatent/http-message
 * @license https://opensource.org/licenses/MIT
 */

namespace Panlatent\Http\Message;

class HeaderStore extends ParameterStore
{
    /**
     * @param string $name
     * @param bool   $default
     * @return string[]
     */
    public function get($name, $default = false)
    {
        $name = $this->prepareName($name);

        return parent::get($name, $default);
    }

    /**
     * @param string $name
     * @return bool
     */
    public function has($name)
    {
        $name = $this->prepareName($name);

        return parent::has($name);
    }

    /**
     * @param string   $name
     * @param string[] $value
     */
    public function set($name, $value)
    {
        $name = $this->prepareName($name);
        parent::set($name, $value);
    }

    /**
     * @param string $name
     */
    public function remove($name)
    {
        $name = $this->prepareName($name);
        parent::remove($name);
    }

    /**
     * Returns standard header name format.
     *
     * @param string $name
     * @return string
     */
    private function prepareName($name)
    {
        $name = strtolower($name);
        $name = ucwords(str_replace('-', ' ', $name));

        return str_replace(' ', '-', $name);
    }
}