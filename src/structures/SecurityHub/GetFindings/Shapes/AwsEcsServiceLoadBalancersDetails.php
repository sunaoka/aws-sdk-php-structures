<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ContainerName
 * @property int $ContainerPort
 * @property string $LoadBalancerName
 * @property string $TargetGroupArn
 */
class AwsEcsServiceLoadBalancersDetails extends Shape
{
    /**
     * @param array{
     *     ContainerName?: string,
     *     ContainerPort?: int,
     *     LoadBalancerName?: string,
     *     TargetGroupArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
