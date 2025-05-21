<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\ListFlowOperationResults\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Address|null $SourceAddress
 * @property Address|null $DestinationAddress
 * @property string|null $SourcePort
 * @property string|null $DestinationPort
 * @property string|null $Protocol
 * @property int|null $Age
 * @property int|null $PacketCount
 * @property int|null $ByteCount
 */
class Flow extends Shape
{
    /**
     * @param array{
     *     SourceAddress?: Address|null,
     *     DestinationAddress?: Address|null,
     *     SourcePort?: string|null,
     *     DestinationPort?: string|null,
     *     Protocol?: string|null,
     *     Age?: int|null,
     *     PacketCount?: int|null,
     *     ByteCount?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
