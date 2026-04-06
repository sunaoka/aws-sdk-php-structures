<?php

namespace Sunaoka\Aws\Structures\LicenseManagerUserSubscriptions\AssociateUser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Domain
 * @property Shapes\IdentityProvider $IdentityProvider
 * @property string $InstanceId
 * @property string $Username
 */
class AssociateUserRequest extends Request
{
    /**
     * @param array{
     *     Domain?: string|null,
     *     IdentityProvider: Shapes\IdentityProvider,
     *     InstanceId: string,
     *     Username: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
