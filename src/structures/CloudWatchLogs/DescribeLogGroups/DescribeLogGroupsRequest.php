<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DescribeLogGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $accountIdentifiers
 * @property string $logGroupNamePrefix
 * @property string $logGroupNamePattern
 * @property string $nextToken
 * @property int $limit
 * @property bool $includeLinkedAccounts
 * @property 'STANDARD'|'INFREQUENT_ACCESS' $logGroupClass
 */
class DescribeLogGroupsRequest extends Request
{
    /**
     * @param array{
     *     accountIdentifiers?: list<string>,
     *     logGroupNamePrefix?: string,
     *     logGroupNamePattern?: string,
     *     nextToken?: string,
     *     limit?: int,
     *     includeLinkedAccounts?: bool,
     *     logGroupClass?: 'STANDARD'|'INFREQUENT_ACCESS'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
