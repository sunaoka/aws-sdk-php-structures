<?php

namespace Sunaoka\Aws\Structures\Ec2\DisassociateAddress;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $AssociationId
 * @property string|null $PublicIp
 * @property bool|null $DryRun
 */
class DisassociateAddressRequest extends Request
{
    /**
     * @param array{
     *     AssociationId?: string|null,
     *     PublicIp?: string|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
