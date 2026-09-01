<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $enrolledAt
 * @property 'Essential'|'Growth'|'Accelerate'|'Premier'|null $tierName
 * @property 'Active'|'Suspended' $status
 */
class PartnerInfo extends Shape
{
    /**
     * @param array{
     *     enrolledAt: \Aws\Api\DateTimeResult,
     *     tierName?: 'Essential'|'Growth'|'Accelerate'|'Premier'|null,
     *     status: 'Active'|'Suspended'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
