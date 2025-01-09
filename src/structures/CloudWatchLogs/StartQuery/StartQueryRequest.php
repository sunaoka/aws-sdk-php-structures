<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\StartQuery;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'CWLI'|'SQL'|'PPL' $queryLanguage
 * @property string $logGroupName
 * @property list<string> $logGroupNames
 * @property list<string> $logGroupIdentifiers
 * @property int $startTime
 * @property int $endTime
 * @property string $queryString
 * @property int $limit
 */
class StartQueryRequest extends Request
{
    /**
     * @param array{
     *     queryLanguage?: 'CWLI'|'SQL'|'PPL',
     *     logGroupName?: string,
     *     logGroupNames?: list<string>,
     *     logGroupIdentifiers?: list<string>,
     *     startTime: int,
     *     endTime: int,
     *     queryString: string,
     *     limit?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
