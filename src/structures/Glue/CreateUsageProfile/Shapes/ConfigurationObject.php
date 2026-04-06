<?php

namespace Sunaoka\Aws\Structures\Glue\CreateUsageProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DefaultValue
 * @property list<string>|null $AllowedValues
 * @property string|null $MinValue
 * @property string|null $MaxValue
 */
class ConfigurationObject extends Shape
{
    /**
     * @param array{
     *     DefaultValue?: string|null,
     *     AllowedValues?: list<string>|null,
     *     MinValue?: string|null,
     *     MaxValue?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
