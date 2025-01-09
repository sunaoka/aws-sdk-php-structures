<?php

namespace Sunaoka\Aws\Structures\Ec2\AttachNetworkInterface;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $NetworkCardIndex
 * @property Shapes\EnaSrdSpecification $EnaSrdSpecification
 * @property bool $DryRun
 * @property string $NetworkInterfaceId
 * @property string $InstanceId
 * @property int $DeviceIndex
 */
class AttachNetworkInterfaceRequest extends Request
{
    /**
     * @param array{
     *     NetworkCardIndex?: int,
     *     EnaSrdSpecification?: Shapes\EnaSrdSpecification,
     *     DryRun?: bool,
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
