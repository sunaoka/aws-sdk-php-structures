<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\BatchGetDeployments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ELBInfo>|null $elbInfoList
 * @property list<TargetGroupInfo>|null $targetGroupInfoList
 * @property list<TargetGroupPairInfo>|null $targetGroupPairInfoList
 */
class LoadBalancerInfo extends Shape
{
    /**
     * @param array{
     *     elbInfoList?: list<ELBInfo>|null,
     *     targetGroupInfoList?: list<TargetGroupInfo>|null,
     *     targetGroupPairInfoList?: list<TargetGroupPairInfo>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
