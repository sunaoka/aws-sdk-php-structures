<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\CreateEndpointGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $EndpointId
 * @property int<0, 255>|null $Weight
 * @property 'INITIAL'|'HEALTHY'|'UNHEALTHY'|null $HealthState
 * @property string|null $HealthReason
 * @property bool|null $ClientIPPreservationEnabled
 */
class EndpointDescription extends Shape
{
    /**
     * @param array{
     *     EndpointId?: string|null,
     *     Weight?: int<0, 255>|null,
     *     HealthState?: 'INITIAL'|'HEALTHY'|'UNHEALTHY'|null,
     *     HealthReason?: string|null,
     *     ClientIPPreservationEnabled?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
