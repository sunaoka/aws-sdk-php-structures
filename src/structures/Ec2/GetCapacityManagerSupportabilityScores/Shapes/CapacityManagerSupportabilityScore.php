<?php

namespace Sunaoka\Aws\Structures\Ec2\GetCapacityManagerSupportabilityScores\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $InstanceType
 * @property string|null $AvailabilityZoneId
 * @property 'high'|'medium'|'low'|null $Score
 */
class CapacityManagerSupportabilityScore extends Shape
{
    /**
     * @param array{
     *     InstanceType?: string|null,
     *     AvailabilityZoneId?: string|null,
     *     Score?: 'high'|'medium'|'low'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
