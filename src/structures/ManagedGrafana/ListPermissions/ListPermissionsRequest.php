<?php

namespace Sunaoka\Aws\Structures\ManagedGrafana\ListPermissions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 * @property 'SSO_USER'|'SSO_GROUP'|null $userType
 * @property string|null $userId
 * @property string|null $groupId
 * @property string $workspaceId
 */
class ListPermissionsRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null,
     *     userType?: 'SSO_USER'|'SSO_GROUP'|null,
     *     userId?: string|null,
     *     groupId?: string|null,
     *     workspaceId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
