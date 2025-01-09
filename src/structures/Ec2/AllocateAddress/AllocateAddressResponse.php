<?php

namespace Sunaoka\Aws\Structures\Ec2\AllocateAddress;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $AllocationId
 * @property string $PublicIpv4Pool
 * @property string $NetworkBorderGroup
 * @property 'vpc'|'standard' $Domain
 * @property string $CustomerOwnedIp
 * @property string $CustomerOwnedIpv4Pool
 * @property string $CarrierIp
 * @property string $PublicIp
 */
class AllocateAddressResponse extends Response
{
}
