<?php

namespace Sunaoka\Aws\Structures\Ec2\DisassociateAddress;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AssociationId
 * @property string $PublicIp
 * @property bool $DryRun
 */
class DisassociateAddressRequest extends Request
{
    /**
     * @param array{
     *     AssociationId?: string,
     *     PublicIp?: string,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
