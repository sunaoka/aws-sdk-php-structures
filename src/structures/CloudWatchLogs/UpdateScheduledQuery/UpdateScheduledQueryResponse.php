<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\UpdateScheduledQuery;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $scheduledQueryArn
 * @property string|null $name
 * @property string|null $description
 * @property 'CWLI'|'SQL'|'PPL'|null $queryLanguage
 * @property string|null $queryString
 * @property list<string>|null $logGroupIdentifiers
 * @property string|null $scheduleExpression
 * @property string|null $timezone
 * @property int|null $startTimeOffset
 * @property Shapes\DestinationConfiguration|null $destinationConfiguration
 * @property 'ENABLED'|'DISABLED'|null $state
 * @property int<0, max>|null $lastTriggeredTime
 * @property 'Running'|'InvalidQuery'|'Complete'|'Failed'|'Timeout'|null $lastExecutionStatus
 * @property int<0, max>|null $scheduleStartTime
 * @property int<0, max>|null $scheduleEndTime
 * @property string|null $executionRoleArn
 * @property int<0, max>|null $creationTime
 * @property int<0, max>|null $lastUpdatedTime
 */
class UpdateScheduledQueryResponse extends Response
{
}
