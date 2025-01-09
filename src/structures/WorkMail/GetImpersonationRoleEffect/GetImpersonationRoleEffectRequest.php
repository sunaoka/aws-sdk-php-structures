<?php

namespace Sunaoka\Aws\Structures\WorkMail\GetImpersonationRoleEffect;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OrganizationId
 * @property string $ImpersonationRoleId
 * @property string $TargetUser
 */
class GetImpersonationRoleEffectRequest extends Request
{
    /**
     * @param array{
     *     OrganizationId: string,
     *     ImpersonationRoleId: string,
     *     TargetUser: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
