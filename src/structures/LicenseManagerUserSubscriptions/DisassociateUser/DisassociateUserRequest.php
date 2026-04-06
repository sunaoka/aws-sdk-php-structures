<?php

namespace Sunaoka\Aws\Structures\LicenseManagerUserSubscriptions\DisassociateUser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Domain
 * @property Shapes\IdentityProvider|null $IdentityProvider
 * @property string|null $InstanceId
 * @property string|null $InstanceUserArn
 * @property string|null $Username
 */
class DisassociateUserRequest extends Request
{
    /**
     * @param array{
     *     Domain?: string|null,
     *     IdentityProvider?: Shapes\IdentityProvider|null,
     *     InstanceId?: string|null,
     *     InstanceUserArn?: string|null,
     *     Username?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
