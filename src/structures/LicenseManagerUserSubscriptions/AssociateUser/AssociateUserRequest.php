<?php

namespace Sunaoka\Aws\Structures\LicenseManagerUserSubscriptions\AssociateUser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Domain
 * @property Shapes\IdentityProvider $IdentityProvider
 * @property string $InstanceId
 * @property array<string, string> $Tags
 * @property string $Username
 */
class AssociateUserRequest extends Request
{
    /**
     * @param array{
     *     Domain?: string,
     *     IdentityProvider: Shapes\IdentityProvider,
     *     InstanceId: string,
     *     Tags?: array<string, string>,
     *     Username: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
