<?php

namespace Sunaoka\Aws\Structures\ManagedGrafana\ListPermissions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $groupId
 * @property int<1, 100> $maxResults
 * @property string $nextToken
 * @property string $userId
 * @property 'SSO_USER'|'SSO_GROUP' $userType
 * @property string $workspaceId
 */
class ListPermissionsRequest extends Request
{
    /**
     * @param array{
     *     groupId?: string,
     *     maxResults?: int<1, 100>,
     *     nextToken?: string,
     *     userId?: string,
     *     userType?: 'SSO_USER'|'SSO_GROUP',
     *     workspaceId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
