<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetIdleRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $identifier
 * @property string $code
 * @property string $message
 * @property 'EC2Instance'|'AutoScalingGroup'|'EBSVolume'|'ECSService'|'RDSDBInstance' $resourceType
 */
class IdleRecommendationError extends Shape
{
    /**
     * @param array{
     *     identifier?: string,
     *     code?: string,
     *     message?: string,
     *     resourceType?: 'EC2Instance'|'AutoScalingGroup'|'EBSVolume'|'ECSService'|'RDSDBInstance'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
