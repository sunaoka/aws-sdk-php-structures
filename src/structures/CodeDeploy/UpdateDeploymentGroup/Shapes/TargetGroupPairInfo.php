<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\UpdateDeploymentGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<TargetGroupInfo> $targetGroups
 * @property TrafficRoute $prodTrafficRoute
 * @property TrafficRoute $testTrafficRoute
 */
class TargetGroupPairInfo extends Shape
{
    /**
     * @param array{
     *     targetGroups?: list<TargetGroupInfo>,
     *     prodTrafficRoute?: TrafficRoute,
     *     testTrafficRoute?: TrafficRoute
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
