<?php

namespace Sunaoka\Aws\Structures\Connect\DisassociateSecurityKey;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $AssociationId
 * @property string|null $ClientToken
 */
class DisassociateSecurityKeyRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     AssociationId: string,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
