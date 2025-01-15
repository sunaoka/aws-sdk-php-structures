<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\CreateDeploymentGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<TargetGroupInfo>|null $targetGroups
 * @property TrafficRoute|null $prodTrafficRoute
 * @property TrafficRoute|null $testTrafficRoute
 */
class TargetGroupPairInfo extends Shape
{
    /**
     * @param array{
     *     targetGroups?: list<TargetGroupInfo>|null,
     *     prodTrafficRoute?: TrafficRoute|null,
     *     testTrafficRoute?: TrafficRoute|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
