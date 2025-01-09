<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\StartQuery;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'CWLI'|'SQL'|'PPL' $queryLanguage
 * @property string $logGroupName
 * @property list<string> $logGroupNames
 * @property list<string> $logGroupIdentifiers
 * @property int<0, max> $startTime
 * @property int<0, max> $endTime
 * @property string $queryString
 * @property int<1, 10000> $limit
 */
class StartQueryRequest extends Request
{
    /**
     * @param array{
     *     queryLanguage?: 'CWLI'|'SQL'|'PPL',
     *     logGroupName?: string,
     *     logGroupNames?: list<string>,
     *     logGroupIdentifiers?: list<string>,
     *     startTime: int<0, max>,
     *     endTime: int<0, max>,
     *     queryString: string,
     *     limit?: int<1, 10000>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
