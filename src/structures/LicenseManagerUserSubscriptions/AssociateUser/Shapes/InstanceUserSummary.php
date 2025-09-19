<?php

namespace Sunaoka\Aws\Structures\LicenseManagerUserSubscriptions\AssociateUser\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Username
 * @property string $InstanceId
 * @property IdentityProvider $IdentityProvider
 * @property string $Status
 * @property string|null $InstanceUserArn
 * @property string|null $StatusMessage
 * @property string|null $Domain
 * @property string|null $AssociationDate
 * @property string|null $DisassociationDate
 */
class InstanceUserSummary extends Shape
{
    /**
     * @param array{
     *     Username: string,
     *     InstanceId: string,
     *     IdentityProvider: IdentityProvider,
     *     Status: string,
     *     InstanceUserArn?: string|null,
     *     StatusMessage?: string|null,
     *     Domain?: string|null,
     *     AssociationDate?: string|null,
     *     DisassociationDate?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
