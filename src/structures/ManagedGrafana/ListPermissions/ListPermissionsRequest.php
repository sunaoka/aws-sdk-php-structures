<?php

namespace Sunaoka\Aws\Structures\ManagedGrafana\ListPermissions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $groupId
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 * @property string|null $userId
 * @property 'SSO_USER'|'SSO_GROUP'|null $userType
 * @property string $workspaceId
 */
class ListPermissionsRequest extends Request
{
    /**
     * @param array{
     *     groupId?: string|null,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null,
     *     userId?: string|null,
     *     userType?: 'SSO_USER'|'SSO_GROUP'|null,
     *     workspaceId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
