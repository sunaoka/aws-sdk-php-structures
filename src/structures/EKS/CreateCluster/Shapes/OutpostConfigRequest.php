<?php

namespace Sunaoka\Aws\Structures\EKS\CreateCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $outpostArns
 * @property string $controlPlaneInstanceType
 * @property ControlPlanePlacementRequest|null $controlPlanePlacement
 * @property string|null $etcdInstanceType
 * @property EtcdPlacementRequest|null $etcdPlacement
 */
class OutpostConfigRequest extends Shape
{
    /**
     * @param array{
     *     outpostArns: list<string>,
     *     controlPlaneInstanceType: string,
     *     controlPlanePlacement?: ControlPlanePlacementRequest|null,
     *     etcdInstanceType?: string|null,
     *     etcdPlacement?: EtcdPlacementRequest|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
