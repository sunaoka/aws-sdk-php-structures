<?php

namespace Sunaoka\Aws\Structures\WafRegional\GetSampledRequests\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property string|null $Value
 */
class HTTPHeader extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Value?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
