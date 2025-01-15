<?php

namespace Sunaoka\Aws\Structures\EKS\RegisterCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $outpostArns
 * @property string $controlPlaneInstanceType
 * @property ControlPlanePlacementResponse|null $controlPlanePlacement
 */
class OutpostConfigResponse extends Shape
{
    /**
     * @param array{
     *     outpostArns: list<string>,
     *     controlPlaneInstanceType: string,
     *     controlPlanePlacement?: ControlPlanePlacementResponse|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
