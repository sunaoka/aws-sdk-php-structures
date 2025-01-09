<?php

namespace Sunaoka\Aws\Structures\LicenseManagerUserSubscriptions\DisassociateUser\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AssociationDate
 * @property string $DisassociationDate
 * @property string $Domain
 * @property IdentityProvider $IdentityProvider
 * @property string $InstanceId
 * @property string $InstanceUserArn
 * @property string $Status
 * @property string $StatusMessage
 * @property string $Username
 */
class InstanceUserSummary extends Shape
{
    /**
     * @param array{
     *     AssociationDate?: string,
     *     DisassociationDate?: string,
     *     Domain?: string,
     *     IdentityProvider: IdentityProvider,
     *     InstanceId: string,
     *     InstanceUserArn?: string,
     *     Status: string,
     *     StatusMessage?: string,
     *     Username: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
