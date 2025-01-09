<?php

namespace Sunaoka\Aws\Structures\WorkMail\GetImpersonationRole;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OrganizationId
 * @property string $ImpersonationRoleId
 */
class GetImpersonationRoleRequest extends Request
{
    /**
     * @param array{
     *     OrganizationId: string,
     *     ImpersonationRoleId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
