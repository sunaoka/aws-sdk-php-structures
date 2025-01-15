<?php

namespace Sunaoka\Aws\Structures\Glue\GetUsageProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, ConfigurationObject>|null $SessionConfiguration
 * @property array<string, ConfigurationObject>|null $JobConfiguration
 */
class ProfileConfiguration extends Shape
{
    /**
     * @param array{
     *     SessionConfiguration?: array<string, ConfigurationObject>|null,
     *     JobConfiguration?: array<string, ConfigurationObject>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
