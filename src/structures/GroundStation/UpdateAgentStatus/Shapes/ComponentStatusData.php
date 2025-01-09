<?php

namespace Sunaoka\Aws\Structures\GroundStation\UpdateAgentStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $bytesReceived
 * @property int $bytesSent
 * @property string $capabilityArn
 * @property string $componentType
 * @property string $dataflowId
 * @property int $packetsDropped
 * @property 'SUCCESS'|'FAILED'|'ACTIVE'|'INACTIVE' $status
 */
class ComponentStatusData extends Shape
{
    /**
     * @param array{
     *     bytesReceived?: int,
     *     bytesSent?: int,
     *     capabilityArn: string,
     *     componentType: string,
     *     dataflowId: string,
     *     packetsDropped?: int,
     *     status: 'SUCCESS'|'FAILED'|'ACTIVE'|'INACTIVE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
