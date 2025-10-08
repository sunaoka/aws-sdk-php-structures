<?php

namespace Sunaoka\Aws\Structures\ARCRegionSwitch\GetPlanExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $namespace
 * @property string $name
 * @property string|null $hpaName
 */
class KubernetesScalingResource extends Shape
{
    /**
     * @param array{
     *     namespace: string,
     *     name: string,
     *     hpaName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
