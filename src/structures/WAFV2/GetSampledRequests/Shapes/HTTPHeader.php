<?php

namespace Sunaoka\Aws\Structures\WAFV2\GetSampledRequests\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Value
 */
class HTTPHeader extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     Value?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
