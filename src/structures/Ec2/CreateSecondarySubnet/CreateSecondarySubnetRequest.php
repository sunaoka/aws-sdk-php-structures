<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateSecondarySubnet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClientToken
 * @property string|null $AvailabilityZone
 * @property string|null $AvailabilityZoneId
 * @property bool|null $DryRun
 * @property string $Ipv4CidrBlock
 * @property string $SecondaryNetworkId
 * @property list<Shapes\TagSpecification>|null $TagSpecifications
 */
class CreateSecondarySubnetRequest extends Request
{
    /**
     * @param array{
     *     ClientToken?: string|null,
     *     AvailabilityZone?: string|null,
     *     AvailabilityZoneId?: string|null,
     *     DryRun?: bool|null,
     *     Ipv4CidrBlock: string,
     *     SecondaryNetworkId: string,
     *     TagSpecifications?: list<Shapes\TagSpecification>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
