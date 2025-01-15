<?php

namespace Sunaoka\Aws\Structures\Ec2\MoveAddressToVpc;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $AllocationId
 * @property 'MoveInProgress'|'InVpc'|'InClassic'|null $Status
 */
class MoveAddressToVpcResponse extends Response
{
}
