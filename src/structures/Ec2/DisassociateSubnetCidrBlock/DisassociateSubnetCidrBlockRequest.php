<?php

namespace Sunaoka\Aws\Structures\Ec2\DisassociateSubnetCidrBlock;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AssociationId
 */
class DisassociateSubnetCidrBlockRequest extends Request
{
    /**
     * @param array{AssociationId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
