<?php

namespace Sunaoka\Aws\Structures\Cloud9\DescribeEnvironmentMemberships;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $userArn
 * @property string|null $environmentId
 * @property list<'owner'|'read-write'|'read-only'>|null $permissions
 * @property string|null $nextToken
 * @property int<0, 25>|null $maxResults
 */
class DescribeEnvironmentMembershipsRequest extends Request
{
    /**
     * @param array{
     *     userArn?: string|null,
     *     environmentId?: string|null,
     *     permissions?: list<'owner'|'read-write'|'read-only'>|null,
     *     nextToken?: string|null,
     *     maxResults?: int<0, 25>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
