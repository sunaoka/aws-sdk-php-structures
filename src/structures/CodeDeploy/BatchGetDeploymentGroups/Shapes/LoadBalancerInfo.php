<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\BatchGetDeploymentGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ELBInfo> $elbInfoList
 * @property list<TargetGroupInfo> $targetGroupInfoList
 * @property list<TargetGroupPairInfo> $targetGroupPairInfoList
 */
class LoadBalancerInfo extends Shape
{
    /**
     * @param array{
     *     elbInfoList?: list<ELBInfo>,
     *     targetGroupInfoList?: list<TargetGroupInfo>,
     *     targetGroupPairInfoList?: list<TargetGroupPairInfo>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
