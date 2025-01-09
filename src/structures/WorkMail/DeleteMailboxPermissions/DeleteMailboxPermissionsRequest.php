<?php

namespace Sunaoka\Aws\Structures\WorkMail\DeleteMailboxPermissions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OrganizationId
 * @property string $EntityId
 * @property string $GranteeId
 */
class DeleteMailboxPermissionsRequest extends Request
{
    /**
     * @param array{
     *     OrganizationId: string,
     *     EntityId: string,
     *     GranteeId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
