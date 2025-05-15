<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DescribeLogGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $accountIdentifiers
 * @property string|null $logGroupNamePrefix
 * @property string|null $logGroupNamePattern
 * @property string|null $nextToken
 * @property int<1, 50>|null $limit
 * @property bool|null $includeLinkedAccounts
 * @property 'STANDARD'|'INFREQUENT_ACCESS'|'DELIVERY'|null $logGroupClass
 * @property list<string>|null $logGroupIdentifiers
 */
class DescribeLogGroupsRequest extends Request
{
    /**
     * @param array{
     *     accountIdentifiers?: list<string>|null,
     *     logGroupNamePrefix?: string|null,
     *     logGroupNamePattern?: string|null,
     *     nextToken?: string|null,
     *     limit?: int<1, 50>|null,
     *     includeLinkedAccounts?: bool|null,
     *     logGroupClass?: 'STANDARD'|'INFREQUENT_ACCESS'|'DELIVERY'|null,
     *     logGroupIdentifiers?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
