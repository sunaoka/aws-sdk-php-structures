<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetIdleRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $identifier
 * @property string|null $code
 * @property string|null $message
 * @property 'EC2Instance'|'AutoScalingGroup'|'EBSVolume'|'ECSService'|'RDSDBInstance'|null $resourceType
 */
class IdleRecommendationError extends Shape
{
    /**
     * @param array{
     *     identifier?: string|null,
     *     code?: string|null,
     *     message?: string|null,
     *     resourceType?: 'EC2Instance'|'AutoScalingGroup'|'EBSVolume'|'ECSService'|'RDSDBInstance'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
