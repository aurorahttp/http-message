<?php
/**
 * Http Message - A HTTP Message library that implements the Psr-7 standard
 *
 * @author  panlatent@gmail.com
 * @link    https://github.com/panlatent/http-message
 * @license https://opensource.org/licenses/MIT
 */

namespace Panlatent\Http\Message;

use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\StreamInterface;

interface ParserInterface
{
    /**
     * @param ServerRequestInterface $serverRequest
     * @param StreamInterface        $stream
     * @return mixed
     */
    public function parse(ServerRequestInterface $serverRequest, StreamInterface $stream);
}