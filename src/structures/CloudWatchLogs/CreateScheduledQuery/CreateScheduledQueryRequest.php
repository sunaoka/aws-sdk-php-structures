<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\CreateScheduledQuery;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string|null $description
 * @property 'CWLI'|'SQL'|'PPL' $queryLanguage
 * @property string $queryString
 * @property list<string>|null $logGroupIdentifiers
 * @property string $scheduleExpression
 * @property string|null $timezone
 * @property int|null $startTimeOffset
 * @property Shapes\DestinationConfiguration|null $destinationConfiguration
 * @property int<0, max>|null $scheduleStartTime
 * @property int<0, max>|null $scheduleEndTime
 * @property string $executionRoleArn
 * @property 'ENABLED'|'DISABLED'|null $state
 * @property array<string, string>|null $tags
 */
class CreateScheduledQueryRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     description?: string|null,
     *     queryLanguage: 'CWLI'|'SQL'|'PPL',
     *     queryString: string,
     *     logGroupIdentifiers?: list<string>|null,
     *     scheduleExpression: string,
     *     timezone?: string|null,
     *     startTimeOffset?: int|null,
     *     destinationConfiguration?: Shapes\DestinationConfiguration|null,
     *     scheduleStartTime?: int<0, max>|null,
     *     scheduleEndTime?: int<0, max>|null,
     *     executionRoleArn: string,
     *     state?: 'ENABLED'|'DISABLED'|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
