<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\DescribeEndpointGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $EndpointId
 * @property int<0, 255> $Weight
 * @property 'INITIAL'|'HEALTHY'|'UNHEALTHY' $HealthState
 * @property string $HealthReason
 * @property bool $ClientIPPreservationEnabled
 */
class EndpointDescription extends Shape
{
    /**
     * @param array{
     *     EndpointId?: string,
     *     Weight?: int<0, 255>,
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
