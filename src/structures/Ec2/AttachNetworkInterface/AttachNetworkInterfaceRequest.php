<?php

namespace Sunaoka\Aws\Structures\Ec2\AttachNetworkInterface;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int|null $NetworkCardIndex
 * @property Shapes\EnaSrdSpecification|null $EnaSrdSpecification
 * @property int|null $EnaQueueCount
 * @property bool|null $DryRun
 * @property string $NetworkInterfaceId
 * @property string $InstanceId
 * @property int $DeviceIndex
 */
class AttachNetworkInterfaceRequest extends Request
{
    /**
     * @param array{
     *     NetworkCardIndex?: int|null,
     *     EnaSrdSpecification?: Shapes\EnaSrdSpecification|null,
     *     EnaQueueCount?: int|null,
     *     DryRun?: bool|null,
     *     NetworkInterfaceId: string,
     *     InstanceId: string,
     *     DeviceIndex: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
