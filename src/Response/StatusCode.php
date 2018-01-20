<?php
/**
 * Http Message - A HTTP Message library that implements the Psr-7 standard
 *
 * @author  panlatent@gmail.com
 * @link    https://github.com/panlatent/http-message
 * @license https://opensource.org/licenses/MIT
 */

namespace Aurora\Http\Message\Response;

class StatusCode
{
    protected $statsCodes = [
        '100' => 'Continue',
        '101' => 'Switching Protocols',
        '102' => 'Processing',                      // WebDAV[RFC 2518]
        '200' => 'OK',
        '201' => 'Created',
        '202' => 'Accepted',
        '203' => 'Non-Authoritative Information',
        '204' => 'No Content',
        '205' => 'Reset Content',
        '206' => 'Partial Content',
        '300' => 'Multiple Choices',
        '301' => 'Moved Permanently',
        '302' => 'Move temporarily',
        '303' => 'See Other',
        '304' => 'Not Modified',
        '305' => 'Use Proxy',
        '306' => 'Switch Proxy',
        '307' => 'Temporary Redirect',
        '400' => 'Bad Request',
        '401' => 'Unauthorized',
        '402' => 'Payment Required',
        '403' => 'Forbidden',
        '404' => 'Not Found',
        '405' => 'Method Not Allowed',
        '406' => 'Not Acceptable',
        '407' => 'Proxy Authentication Required',
        '408' => 'Request Timeout',
        '409' => 'Conflict',
        '410' => 'Gone',
        '411' => 'Length Required',
        '412' => 'Precondition Failed',
        '413' => 'Request Entity Too Large',
        '414' => 'Request-URI Too Long',
        '415' => 'Unsupported Media Type',
        '416' => 'Requested Range Not Satisfiable',
        '417' => 'Expectation Failed',
        '422' => 'Unprocessable Entity',            // WebDAV[RFC 4918]
        '423' => 'Locked',                          // WebDAV[RFC 4918]
        '424' => 'Failed Dependency',               // WebDAV[RFC 4918]
        '425' => 'Unordered Collection',            // WebDAV[RFC 3658]
        '426' => 'Upgrade Required',                // [RFC 2817]
        '449' => 'Retry With',                      // (!)Microsoft
        '500' => 'Internal Server Error',
        '501' => 'Not Implemented',
        '502' => 'Bad Gateway',
        '503' => 'Service Unavailable',
        '504' => 'Gateway Timeout',
        '505' => 'HTTP Version Not Supported',      // [RFC 2295]
        '506' => 'Variant Also Negotiates',         // WebDAV[RFC 4918]
        '507' => 'Insufficient Storage',            // (!)Non standard
        '509' => 'Bandwidth Limit Exceeded',        // [RFC 2774]
        '510' => 'Not Extended',
        '600' => 'Unparseable Response Headers',
    ];

    public function getCodeFromReason($statusReason)
    {
        if (false === ($code = array_search($statusReason, $this->statsCodes))) {
            return false;
        }

        return $code;
    }

    public function getReasonFromCode($statusCode)
    {
        if ( ! isset($this->statsCodes[$statusCode])) {
            return false;
        }

        return $this->statsCodes[$statusCode];
    }
}