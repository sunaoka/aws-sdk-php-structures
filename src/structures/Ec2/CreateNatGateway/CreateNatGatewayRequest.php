<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateNatGateway;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AllocationId
 * @property string $ClientToken
 * @property bool $DryRun
 * @property string $SubnetId
 * @property list<Shapes\TagSpecification> $TagSpecifications
 * @property 'private'|'public' $ConnectivityType
 * @property string $PrivateIpAddress
 * @property list<string> $SecondaryAllocationIds
 * @property list<string> $SecondaryPrivateIpAddresses
 * @property int $SecondaryPrivateIpAddressCount
 */
class CreateNatGatewayRequest extends Request
{
    /**
     * @param array{
     *     AllocationId?: string,
     *     ClientToken?: string,
     *     DryRun?: bool,
     *     SubnetId: string,
     *     TagSpecifications?: list<Shapes\TagSpecification>,
     *     ConnectivityType?: 'private'|'public',
     *     PrivateIpAddress?: string,
     *     SecondaryAllocationIds?: list<string>,
     *     SecondaryPrivateIpAddresses?: list<string>,
     *     SecondaryPrivateIpAddressCount?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
