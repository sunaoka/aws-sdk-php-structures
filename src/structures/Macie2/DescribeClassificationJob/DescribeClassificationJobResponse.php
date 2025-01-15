<?php

namespace Sunaoka\Aws\Structures\Macie2\DescribeClassificationJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<string>|null $allowListIds
 * @property string|null $clientToken
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property list<string>|null $customDataIdentifierIds
 * @property string|null $description
 * @property bool|null $initialRun
 * @property string|null $jobArn
 * @property string|null $jobId
 * @property 'RUNNING'|'PAUSED'|'CANCELLED'|'COMPLETE'|'IDLE'|'USER_PAUSED'|null $jobStatus
 * @property 'ONE_TIME'|'SCHEDULED'|null $jobType
 * @property Shapes\LastRunErrorStatus|null $lastRunErrorStatus
 * @property \Aws\Api\DateTimeResult|null $lastRunTime
 * @property list<string>|null $managedDataIdentifierIds
 * @property 'ALL'|'EXCLUDE'|'INCLUDE'|'NONE'|'RECOMMENDED'|null $managedDataIdentifierSelector
 * @property string|null $name
 * @property Shapes\S3JobDefinition|null $s3JobDefinition
 * @property int|null $samplingPercentage
 * @property Shapes\JobScheduleFrequency|null $scheduleFrequency
 * @property Shapes\Statistics|null $statistics
 * @property array<string, string>|null $tags
 * @property Shapes\UserPausedDetails|null $userPausedDetails
 */
class DescribeClassificationJobResponse extends Response
{
}
