<?php

namespace Sunaoka\Aws\Structures\Glue\CreateUsageProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DefaultValue
 * @property list<string> $AllowedValues
 * @property string $MinValue
 * @property string $MaxValue
 */
class ConfigurationObject extends Shape
{
    /**
     * @param array{
     *     DefaultValue?: string,
     *     AllowedValues?: list<string>,
     *     MinValue?: string,
     *     MaxValue?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
