<?php

namespace Sunaoka\Aws\Structures\WorkMail\PutMailboxPermissions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OrganizationId
 * @property string $EntityId
 * @property string $GranteeId
 * @property list<'FULL_ACCESS'|'SEND_AS'|'SEND_ON_BEHALF'> $PermissionValues
 */
class PutMailboxPermissionsRequest extends Request
{
    /**
     * @param array{
     *     OrganizationId: string,
     *     EntityId: string,
     *     GranteeId: string,
     *     PermissionValues: list<'FULL_ACCESS'|'SEND_AS'|'SEND_ON_BEHALF'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
