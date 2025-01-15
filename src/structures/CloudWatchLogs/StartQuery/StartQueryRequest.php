<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\StartQuery;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'CWLI'|'SQL'|'PPL'|null $queryLanguage
 * @property string|null $logGroupName
 * @property list<string>|null $logGroupNames
 * @property list<string>|null $logGroupIdentifiers
 * @property int<0, max> $startTime
 * @property int<0, max> $endTime
 * @property string $queryString
 * @property int<1, 10000>|null $limit
 */
class StartQueryRequest extends Request
{
    /**
     * @param array{
     *     queryLanguage?: 'CWLI'|'SQL'|'PPL'|null,
     *     logGroupName?: string|null,
     *     logGroupNames?: list<string>|null,
     *     logGroupIdentifiers?: list<string>|null,
     *     startTime: int<0, max>,
     *     endTime: int<0, max>,
     *     queryString: string,
     *     limit?: int<1, 10000>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
