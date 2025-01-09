<?php

namespace Sunaoka\Aws\Structures\LaunchWizard\GetWorkloadDeploymentPattern\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $comparator
 * @property string $name
 * @property string $value
 */
class DeploymentConditionalField extends Shape
{
    /**
     * @param array{
     *     comparator?: string,
     *     name?: string,
     *     value?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
