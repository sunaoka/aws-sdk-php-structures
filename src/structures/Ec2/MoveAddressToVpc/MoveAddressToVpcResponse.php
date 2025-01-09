<?php

namespace Sunaoka\Aws\Structures\Ec2\MoveAddressToVpc;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $AllocationId
 * @property 'MoveInProgress'|'InVpc'|'InClassic' $Status
 */
class MoveAddressToVpcResponse extends Response
{
}
