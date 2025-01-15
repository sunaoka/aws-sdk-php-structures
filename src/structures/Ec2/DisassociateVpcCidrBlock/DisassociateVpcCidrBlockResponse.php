<?php

namespace Sunaoka\Aws\Structures\Ec2\DisassociateVpcCidrBlock;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\VpcIpv6CidrBlockAssociation|null $Ipv6CidrBlockAssociation
 * @property Shapes\VpcCidrBlockAssociation|null $CidrBlockAssociation
 * @property string|null $VpcId
 */
class DisassociateVpcCidrBlockResponse extends Response
{
}
