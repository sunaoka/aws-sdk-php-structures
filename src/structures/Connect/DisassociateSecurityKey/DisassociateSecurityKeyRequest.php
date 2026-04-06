<?php

namespace Sunaoka\Aws\Structures\Connect\DisassociateSecurityKey;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $AssociationId
 */
class DisassociateSecurityKeyRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     AssociationId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
