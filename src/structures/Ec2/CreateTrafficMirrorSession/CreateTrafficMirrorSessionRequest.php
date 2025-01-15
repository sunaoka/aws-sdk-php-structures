<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateTrafficMirrorSession;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NetworkInterfaceId
 * @property string $TrafficMirrorTargetId
 * @property string $TrafficMirrorFilterId
 * @property int|null $PacketLength
 * @property int $SessionNumber
 * @property int|null $VirtualNetworkId
 * @property string|null $Description
 * @property list<Shapes\TagSpecification>|null $TagSpecifications
 * @property bool|null $DryRun
 * @property string|null $ClientToken
 */
class CreateTrafficMirrorSessionRequest extends Request
{
    /**
     * @param array{
     *     NetworkInterfaceId: string,
     *     TrafficMirrorTargetId: string,
     *     TrafficMirrorFilterId: string,
     *     PacketLength?: int|null,
     *     SessionNumber: int,
     *     VirtualNetworkId?: int|null,
     *     Description?: string|null,
     *     TagSpecifications?: list<Shapes\TagSpecification>|null,
     *     DryRun?: bool|null,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
