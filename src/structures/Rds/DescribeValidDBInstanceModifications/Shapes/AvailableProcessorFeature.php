<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeValidDBInstanceModifications\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property string|null $DefaultValue
 * @property string|null $AllowedValues
 */
class AvailableProcessorFeature extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     DefaultValue?: string|null,
     *     AllowedValues?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
