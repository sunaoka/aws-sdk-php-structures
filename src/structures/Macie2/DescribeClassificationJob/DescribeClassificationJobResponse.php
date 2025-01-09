<?php

namespace Sunaoka\Aws\Structures\Macie2\DescribeClassificationJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<string> $allowListIds
 * @property string $clientToken
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property list<string> $customDataIdentifierIds
 * @property string $description
 * @property bool $initialRun
 * @property string $jobArn
 * @property string $jobId
 * @property 'RUNNING'|'PAUSED'|'CANCELLED'|'COMPLETE'|'IDLE'|'USER_PAUSED' $jobStatus
 * @property 'ONE_TIME'|'SCHEDULED' $jobType
 * @property Shapes\LastRunErrorStatus $lastRunErrorStatus
 * @property \Aws\Api\DateTimeResult $lastRunTime
 * @property list<string> $managedDataIdentifierIds
 * @property 'ALL'|'EXCLUDE'|'INCLUDE'|'NONE'|'RECOMMENDED' $managedDataIdentifierSelector
 * @property string $name
 * @property Shapes\S3JobDefinition $s3JobDefinition
 * @property int $samplingPercentage
 * @property Shapes\JobScheduleFrequency $scheduleFrequency
 * @property Shapes\Statistics $statistics
 * @property array<string, string> $tags
 * @property Shapes\UserPausedDetails $userPausedDetails
 */
class DescribeClassificationJobResponse extends Response
{
}
