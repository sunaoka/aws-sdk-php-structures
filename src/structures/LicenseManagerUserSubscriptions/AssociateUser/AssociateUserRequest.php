<?php

namespace Sunaoka\Aws\Structures\LicenseManagerUserSubscriptions\AssociateUser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Username
 * @property string $InstanceId
 * @property Shapes\IdentityProvider $IdentityProvider
 * @property string|null $Domain
 * @property array<string, string>|null $Tags
 */
class AssociateUserRequest extends Request
{
    /**
     * @param array{
     *     Username: string,
     *     InstanceId: string,
     *     IdentityProvider: Shapes\IdentityProvider,
     *     Domain?: string|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
