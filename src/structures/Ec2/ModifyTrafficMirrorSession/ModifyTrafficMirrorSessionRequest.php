<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyTrafficMirrorSession;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TrafficMirrorSessionId
 * @property string $TrafficMirrorTargetId
 * @property string $TrafficMirrorFilterId
 * @property int $PacketLength
 * @property int $SessionNumber
 * @property int $VirtualNetworkId
 * @property string $Description
 * @property list<'packet-length'|'description'|'virtual-network-id'> $RemoveFields
 * @property bool $DryRun
 */
class ModifyTrafficMirrorSessionRequest extends Request
{
    /**
     * @param array{
     *     TrafficMirrorSessionId: string,
     *     TrafficMirrorTargetId?: string,
     *     TrafficMirrorFilterId?: string,
     *     PacketLength?: int,
     *     SessionNumber?: int,
     *     VirtualNetworkId?: int,
     *     Description?: string,
     *     RemoveFields?: list<'packet-length'|'description'|'virtual-network-id'>,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
