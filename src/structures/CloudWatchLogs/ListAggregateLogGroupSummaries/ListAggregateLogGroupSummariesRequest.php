<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\ListAggregateLogGroupSummaries;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $accountIdentifiers
 * @property bool|null $includeLinkedAccounts
 * @property 'STANDARD'|'INFREQUENT_ACCESS'|'DELIVERY'|null $logGroupClass
 * @property string|null $logGroupNamePattern
 * @property list<Shapes\DataSourceFilter>|null $dataSources
 * @property 'DATA_SOURCE_NAME_TYPE_AND_FORMAT'|'DATA_SOURCE_NAME_AND_TYPE' $groupBy
 * @property string|null $nextToken
 * @property int<1, 50>|null $limit
 */
class ListAggregateLogGroupSummariesRequest extends Request
{
    /**
     * @param array{
     *     accountIdentifiers?: list<string>|null,
     *     includeLinkedAccounts?: bool|null,
     *     logGroupClass?: 'STANDARD'|'INFREQUENT_ACCESS'|'DELIVERY'|null,
     *     logGroupNamePattern?: string|null,
     *     dataSources?: list<Shapes\DataSourceFilter>|null,
     *     groupBy: 'DATA_SOURCE_NAME_TYPE_AND_FORMAT'|'DATA_SOURCE_NAME_AND_TYPE',
     *     nextToken?: string|null,
     *     limit?: int<1, 50>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
