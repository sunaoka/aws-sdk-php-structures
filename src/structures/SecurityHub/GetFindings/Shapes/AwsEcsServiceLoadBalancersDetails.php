<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ContainerName
 * @property int|null $ContainerPort
 * @property string|null $LoadBalancerName
 * @property string|null $TargetGroupArn
 */
class AwsEcsServiceLoadBalancersDetails extends Shape
{
    /**
     * @param array{
     *     ContainerName?: string|null,
     *     ContainerPort?: int|null,
     *     LoadBalancerName?: string|null,
     *     TargetGroupArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
