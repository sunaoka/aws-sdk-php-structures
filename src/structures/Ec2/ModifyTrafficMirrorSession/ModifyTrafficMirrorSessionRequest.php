<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyTrafficMirrorSession;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TrafficMirrorSessionId
 * @property string|null $TrafficMirrorTargetId
 * @property string|null $TrafficMirrorFilterId
 * @property int|null $PacketLength
 * @property int|null $SessionNumber
 * @property int|null $VirtualNetworkId
 * @property string|null $Description
 * @property list<'packet-length'|'description'|'virtual-network-id'>|null $RemoveFields
 * @property bool|null $DryRun
 */
class ModifyTrafficMirrorSessionRequest extends Request
{
    /**
     * @param array{
     *     TrafficMirrorSessionId: string,
     *     TrafficMirrorTargetId?: string|null,
     *     TrafficMirrorFilterId?: string|null,
     *     PacketLength?: int|null,
     *     SessionNumber?: int|null,
     *     VirtualNetworkId?: int|null,
     *     Description?: string|null,
     *     RemoveFields?: list<'packet-length'|'description'|'virtual-network-id'>|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
