<?php

namespace Sunaoka\Aws\Structures\LicenseManagerUserSubscriptions\DisassociateUser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Username
 * @property string|null $InstanceId
 * @property Shapes\IdentityProvider|null $IdentityProvider
 * @property string|null $InstanceUserArn
 * @property string|null $Domain
 */
class DisassociateUserRequest extends Request
{
    /**
     * @param array{
     *     Username?: string|null,
     *     InstanceId?: string|null,
     *     IdentityProvider?: Shapes\IdentityProvider|null,
     *     InstanceUserArn?: string|null,
     *     Domain?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
