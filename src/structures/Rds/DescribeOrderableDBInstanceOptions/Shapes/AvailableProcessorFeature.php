<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeOrderableDBInstanceOptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $DefaultValue
 * @property string $AllowedValues
 */
class AvailableProcessorFeature extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     DefaultValue?: string,
     *     AllowedValues?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
