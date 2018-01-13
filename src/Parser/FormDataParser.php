<?php
/**
 * Http Message - A HTTP Message library that implements the Psr-7 standard
 *
 * @author  panlatent@gmail.com
 * @link    https://github.com/panlatent/http-message
 * @license https://opensource.org/licenses/MIT
 */

namespace Panlatent\Http\Message\Parser;

use Panlatent\Http\Message\ParserInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\StreamInterface;

class FormDataParser implements ParserInterface
{
    public function parse(ServerRequestInterface $serverRequest, StreamInterface $stream)
    {
        return [];
    }
}