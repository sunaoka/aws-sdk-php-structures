<?php

namespace Sunaoka\Aws\Structures\Cloud9\DescribeEnvironmentMemberships;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $userArn
 * @property string $environmentId
 * @property list<'owner'|'read-write'|'read-only'> $permissions
 * @property string $nextToken
 * @property int<0, 25> $maxResults
 */
class DescribeEnvironmentMembershipsRequest extends Request
{
    /**
     * @param array{
     *     userArn?: string,
     *     environmentId?: string,
     *     permissions?: list<'owner'|'read-write'|'read-only'>,
     *     nextToken?: string,
     *     maxResults?: int<0, 25>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
