<?php

namespace Sunaoka\Aws\Structures\GroundStation\UpdateAgentStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $componentType
 * @property string $capabilityArn
 * @property 'SUCCESS'|'FAILED'|'ACTIVE'|'INACTIVE' $status
 * @property int|null $bytesSent
 * @property int|null $bytesReceived
 * @property int|null $packetsDropped
 * @property string $dataflowId
 */
class ComponentStatusData extends Shape
{
    /**
     * @param array{
     *     componentType: string,
     *     capabilityArn: string,
     *     status: 'SUCCESS'|'FAILED'|'ACTIVE'|'INACTIVE',
     *     bytesSent?: int|null,
     *     bytesReceived?: int|null,
     *     packetsDropped?: int|null,
     *     dataflowId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
