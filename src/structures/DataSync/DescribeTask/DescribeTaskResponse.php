<?php

namespace Sunaoka\Aws\Structures\DataSync\DescribeTask;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $TaskArn
 * @property 'AVAILABLE'|'CREATING'|'QUEUED'|'RUNNING'|'UNAVAILABLE'|null $Status
 * @property string|null $Name
 * @property string|null $CurrentTaskExecutionArn
 * @property string|null $SourceLocationArn
 * @property string|null $DestinationLocationArn
 * @property string|null $CloudWatchLogGroupArn
 * @property list<string>|null $SourceNetworkInterfaceArns
 * @property list<string>|null $DestinationNetworkInterfaceArns
 * @property Shapes\Options|null $Options
 * @property list<Shapes\FilterRule>|null $Excludes
 * @property Shapes\TaskSchedule|null $Schedule
 * @property string|null $ErrorCode
 * @property string|null $ErrorDetail
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property list<Shapes\FilterRule>|null $Includes
 * @property Shapes\ManifestConfig|null $ManifestConfig
 * @property Shapes\TaskReportConfig|null $TaskReportConfig
 * @property Shapes\TaskScheduleDetails|null $ScheduleDetails
 * @property 'BASIC'|'ENHANCED'|null $TaskMode
 */
class DescribeTaskResponse extends Response
{
}
