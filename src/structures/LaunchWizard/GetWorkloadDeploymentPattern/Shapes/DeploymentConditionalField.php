<?php

namespace Sunaoka\Aws\Structures\LaunchWizard\GetWorkloadDeploymentPattern\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $comparator
 * @property string|null $name
 * @property string|null $value
 */
class DeploymentConditionalField extends Shape
{
    /**
     * @param array{
     *     comparator?: string|null,
     *     name?: string|null,
     *     value?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
