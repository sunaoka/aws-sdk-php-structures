<?php

namespace Sunaoka\Aws\Structures\WorkMail\GetAccessControlEffect;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OrganizationId
 * @property string $IpAddress
 * @property string $Action
 * @property string|null $UserId
 * @property string|null $ImpersonationRoleId
 */
class GetAccessControlEffectRequest extends Request
{
    /**
     * @param array{
     *     OrganizationId: string,
     *     IpAddress: string,
     *     Action: string,
     *     UserId?: string|null,
     *     ImpersonationRoleId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
