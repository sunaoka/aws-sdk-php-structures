<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeOptionGroupOptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AllowedValue
 * @property string|null $MinimumEngineVersion
 */
class MinimumEngineVersionPerAllowedValue extends Shape
{
    /**
     * @param array{
     *     AllowedValue?: string|null,
     *     MinimumEngineVersion?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
