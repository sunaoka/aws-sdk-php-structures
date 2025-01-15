<?php

namespace Sunaoka\Aws\Structures\WAFV2\GetSampledRequests\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ClientIP
 * @property string|null $Country
 * @property string|null $URI
 * @property string|null $Method
 * @property string|null $HTTPVersion
 * @property list<HTTPHeader>|null $Headers
 */
class HTTPRequest extends Shape
{
    /**
     * @param array{
     *     ClientIP?: string|null,
     *     Country?: string|null,
     *     URI?: string|null,
     *     Method?: string|null,
     *     HTTPVersion?: string|null,
     *     Headers?: list<HTTPHeader>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
