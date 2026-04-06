<?php

namespace Sunaoka\Aws\Structures\Ec2\AttachNetworkInterface;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $DeviceIndex
 * @property bool|null $DryRun
 * @property string $InstanceId
 * @property string $NetworkInterfaceId
 * @property int|null $NetworkCardIndex
 * @property Shapes\EnaSrdSpecification|null $EnaSrdSpecification
 */
class AttachNetworkInterfaceRequest extends Request
{
    /**
     * @param array{
     *     DeviceIndex: int,
     *     DryRun?: bool|null,
     *     InstanceId: string,
     *     NetworkInterfaceId: string,
     *     NetworkCardIndex?: int|null,
     *     EnaSrdSpecification?: Shapes\EnaSrdSpecification|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
