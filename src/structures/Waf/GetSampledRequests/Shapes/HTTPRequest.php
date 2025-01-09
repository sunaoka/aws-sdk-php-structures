<?php

namespace Sunaoka\Aws\Structures\Waf\GetSampledRequests\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ClientIP
 * @property string $Country
 * @property string $URI
 * @property string $Method
 * @property string $HTTPVersion
 * @property list<HTTPHeader> $Headers
 */
class HTTPRequest extends Shape
{
    /**
     * @param array{
     *     ClientIP?: string,
     *     Country?: string,
     *     URI?: string,
     *     Method?: string,
     *     HTTPVersion?: string,
     *     Headers?: list<HTTPHeader>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
