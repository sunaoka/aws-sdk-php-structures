<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetEC2InstanceRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $recommendationSourceArn
 * @property 'Ec2Instance'|'AutoScalingGroup'|'EbsVolume'|'LambdaFunction'|'EcsService'|'License'|'RdsDBInstance'|'RdsDBInstanceStorage'|null $recommendationSourceType
 */
class RecommendationSource extends Shape
{
    /**
     * @param array{
     *     recommendationSourceArn?: string|null,
     *     recommendationSourceType?: 'Ec2Instance'|'AutoScalingGroup'|'EbsVolume'|'LambdaFunction'|'EcsService'|'License'|'RdsDBInstance'|'RdsDBInstanceStorage'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
