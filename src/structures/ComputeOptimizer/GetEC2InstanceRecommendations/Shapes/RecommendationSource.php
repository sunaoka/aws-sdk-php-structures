<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetEC2InstanceRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $recommendationSourceArn
 * @property 'Ec2Instance'|'AutoScalingGroup'|'EbsVolume'|'LambdaFunction'|'EcsService'|'License'|'RdsDBInstance'|'RdsDBInstanceStorage' $recommendationSourceType
 */
class RecommendationSource extends Shape
{
    /**
     * @param array{
     *     recommendationSourceArn?: string,
     *     recommendationSourceType?: 'Ec2Instance'|'AutoScalingGroup'|'EbsVolume'|'LambdaFunction'|'EcsService'|'License'|'RdsDBInstance'|'RdsDBInstanceStorage'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
