<?php

namespace Sunaoka\Aws\Structures\GroundStation\UpdateAgentStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $bytesReceived
 * @property int|null $bytesSent
 * @property string $capabilityArn
 * @property string $componentType
 * @property string $dataflowId
 * @property int|null $packetsDropped
 * @property 'SUCCESS'|'FAILED'|'ACTIVE'|'INACTIVE' $status
 */
class ComponentStatusData extends Shape
{
    /**
     * @param array{
     *     bytesReceived?: int|null,
     *     bytesSent?: int|null,
     *     capabilityArn: string,
     *     componentType: string,
     *     dataflowId: string,
     *     packetsDropped?: int|null,
     *     status: 'SUCCESS'|'FAILED'|'ACTIVE'|'INACTIVE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
