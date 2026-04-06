<?php

namespace Sunaoka\Aws\Structures\LaunchWizard\GetWorkloadDeploymentPattern\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property string|null $value
 * @property string|null $comparator
 */
class DeploymentConditionalField extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     value?: string|null,
     *     comparator?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
