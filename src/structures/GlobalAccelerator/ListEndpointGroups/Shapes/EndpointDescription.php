<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\ListEndpointGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $EndpointId
 * @property int $Weight
 * @property 'INITIAL'|'HEALTHY'|'UNHEALTHY' $HealthState
 * @property string $HealthReason
 * @property bool $ClientIPPreservationEnabled
 */
class EndpointDescription extends Shape
{
    /**
     * @param array{
     *     EndpointId?: string,
     *     Weight?: int,
     *     HealthState?: 'INITIAL'|'HEALTHY'|'UNHEALTHY',
     *     HealthReason?: string,
     *     ClientIPPreservationEnabled?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
