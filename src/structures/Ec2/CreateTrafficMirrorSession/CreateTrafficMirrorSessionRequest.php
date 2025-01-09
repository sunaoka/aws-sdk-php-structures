<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateTrafficMirrorSession;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NetworkInterfaceId
 * @property string $TrafficMirrorTargetId
 * @property string $TrafficMirrorFilterId
 * @property int $PacketLength
 * @property int $SessionNumber
 * @property int $VirtualNetworkId
 * @property string $Description
 * @property list<Shapes\TagSpecification> $TagSpecifications
 * @property bool $DryRun
 * @property string $ClientToken
 */
class CreateTrafficMirrorSessionRequest extends Request
{
    /**
     * @param array{
     *     NetworkInterfaceId: string,
     *     TrafficMirrorTargetId: string,
     *     TrafficMirrorFilterId: string,
     *     PacketLength?: int,
     *     SessionNumber: int,
     *     VirtualNetworkId?: int,
     *     Description?: string,
     *     TagSpecifications?: list<Shapes\TagSpecification>,
     *     DryRun?: bool,
     *     ClientToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
