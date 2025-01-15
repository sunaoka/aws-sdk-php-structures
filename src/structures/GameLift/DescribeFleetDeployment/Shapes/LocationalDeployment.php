<?php

namespace Sunaoka\Aws\Structures\GameLift\DescribeFleetDeployment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'IN_PROGRESS'|'IMPAIRED'|'COMPLETE'|'ROLLBACK_IN_PROGRESS'|'ROLLBACK_COMPLETE'|'CANCELLED'|'PENDING'|null $DeploymentStatus
 */
class LocationalDeployment extends Shape
{
    /**
     * @param array{DeploymentStatus?: 'IN_PROGRESS'|'IMPAIRED'|'COMPLETE'|'ROLLBACK_IN_PROGRESS'|'ROLLBACK_COMPLETE'|'CANCELLED'|'PENDING'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
