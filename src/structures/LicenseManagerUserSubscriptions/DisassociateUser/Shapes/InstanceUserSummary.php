<?php

namespace Sunaoka\Aws\Structures\LicenseManagerUserSubscriptions\DisassociateUser\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AssociationDate
 * @property string|null $DisassociationDate
 * @property string|null $Domain
 * @property IdentityProvider $IdentityProvider
 * @property string $InstanceId
 * @property string|null $InstanceUserArn
 * @property string $Status
 * @property string|null $StatusMessage
 * @property string $Username
 */
class InstanceUserSummary extends Shape
{
    /**
     * @param array{
     *     AssociationDate?: string|null,
     *     DisassociationDate?: string|null,
     *     Domain?: string|null,
     *     IdentityProvider: IdentityProvider,
     *     InstanceId: string,
     *     InstanceUserArn?: string|null,
     *     Status: string,
     *     StatusMessage?: string|null,
     *     Username: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
