<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\DescribeTargetHealth\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TargetDescription $Target
 * @property string $HealthCheckPort
 * @property TargetHealth $TargetHealth
 * @property AnomalyDetection $AnomalyDetection
 * @property AdministrativeOverride $AdministrativeOverride
 */
class TargetHealthDescription extends Shape
{
    /**
     * @param array{
     *     Target?: TargetDescription,
     *     HealthCheckPort?: string,
     *     TargetHealth?: TargetHealth,
     *     AnomalyDetection?: AnomalyDetection,
     *     AdministrativeOverride?: AdministrativeOverride
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
