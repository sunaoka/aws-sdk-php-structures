<?php

namespace Sunaoka\Aws\Structures\Glue\GetUsageProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, ConfigurationObject> $SessionConfiguration
 * @property array<string, ConfigurationObject> $JobConfiguration
 */
class ProfileConfiguration extends Shape
{
    /**
     * @param array{
     *     SessionConfiguration?: array<string, ConfigurationObject>,
     *     JobConfiguration?: array<string, ConfigurationObject>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
