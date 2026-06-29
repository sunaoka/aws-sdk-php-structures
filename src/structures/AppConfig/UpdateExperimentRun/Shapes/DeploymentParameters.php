<?php

namespace Sunaoka\Aws\Structures\AppConfig\UpdateExperimentRun\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string>|null $DynamicExtensionParameters
 * @property array<string, string>|null $Tags
 */
class DeploymentParameters extends Shape
{
    /**
     * @param array{
     *     DynamicExtensionParameters?: array<string, string>|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
