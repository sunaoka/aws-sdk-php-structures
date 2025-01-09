<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeOptionGroupOptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AllowedValue
 * @property string $MinimumEngineVersion
 */
class MinimumEngineVersionPerAllowedValue extends Shape
{
    /**
     * @param array{
     *     AllowedValue?: string,
     *     MinimumEngineVersion?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
