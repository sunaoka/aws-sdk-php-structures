<?php

namespace Sunaoka\Aws\Structures\LicenseManagerUserSubscriptions\AssociateUser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Domain
 * @property Shapes\IdentityProvider $IdentityProvider
 * @property string $InstanceId
 * @property array<string, string>|null $Tags
 * @property string $Username
 */
class AssociateUserRequest extends Request
{
    /**
     * @param array{
     *     Domain?: string|null,
     *     IdentityProvider: Shapes\IdentityProvider,
     *     InstanceId: string,
     *     Tags?: array<string, string>|null,
     *     Username: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
