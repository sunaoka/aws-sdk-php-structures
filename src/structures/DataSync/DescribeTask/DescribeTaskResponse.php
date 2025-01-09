<?php

namespace Sunaoka\Aws\Structures\DataSync\DescribeTask;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $TaskArn
 * @property 'AVAILABLE'|'CREATING'|'QUEUED'|'RUNNING'|'UNAVAILABLE' $Status
 * @property string $Name
 * @property string $CurrentTaskExecutionArn
 * @property string $SourceLocationArn
 * @property string $DestinationLocationArn
 * @property string $CloudWatchLogGroupArn
 * @property list<string> $SourceNetworkInterfaceArns
 * @property list<string> $DestinationNetworkInterfaceArns
 * @property Shapes\Options $Options
 * @property list<Shapes\FilterRule> $Excludes
 * @property Shapes\TaskSchedule $Schedule
 * @property string $ErrorCode
 * @property string $ErrorDetail
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property list<Shapes\FilterRule> $Includes
 * @property Shapes\ManifestConfig $ManifestConfig
 * @property Shapes\TaskReportConfig $TaskReportConfig
 * @property Shapes\TaskScheduleDetails $ScheduleDetails
 * @property 'BASIC'|'ENHANCED' $TaskMode
 */
class DescribeTaskResponse extends Response
{
}
