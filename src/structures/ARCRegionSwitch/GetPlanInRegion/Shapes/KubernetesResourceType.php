<?php

namespace Sunaoka\Aws\Structures\ARCRegionSwitch\GetPlanInRegion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $apiVersion
 * @property string $kind
 */
class KubernetesResourceType extends Shape
{
    /**
     * @param array{
     *     apiVersion: string,
     *     kind: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
