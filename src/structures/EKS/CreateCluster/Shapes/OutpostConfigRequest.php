<?php

namespace Sunaoka\Aws\Structures\EKS\CreateCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $outpostArns
 * @property string $controlPlaneInstanceType
 * @property ControlPlanePlacementRequest $controlPlanePlacement
 */
class OutpostConfigRequest extends Shape
{
    /**
     * @param array{
     *     outpostArns: list<string>,
     *     controlPlaneInstanceType: string,
     *     controlPlanePlacement?: ControlPlanePlacementRequest
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
