<?php

namespace Sunaoka\Aws\Structures\Ec2\AllocateAddress;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $PublicIp
 * @property string|null $AllocationId
 * @property string|null $PublicIpv4Pool
 * @property string|null $NetworkBorderGroup
 * @property 'vpc'|'standard'|null $Domain
 * @property string|null $CustomerOwnedIp
 * @property string|null $CustomerOwnedIpv4Pool
 * @property string|null $CarrierIp
 */
class AllocateAddressResponse extends Response
{
}
