<?php

namespace Sunaoka\Aws\Structures\DataSync\CreateTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SourceLocationArn
 * @property string $DestinationLocationArn
 * @property string $CloudWatchLogGroupArn
 * @property string $Name
 * @property Shapes\Options $Options
 * @property list<Shapes\FilterRule> $Excludes
 * @property Shapes\TaskSchedule $Schedule
 * @property list<Shapes\TagListEntry> $Tags
 * @property list<Shapes\FilterRule> $Includes
 * @property Shapes\ManifestConfig $ManifestConfig
 * @property Shapes\TaskReportConfig $TaskReportConfig
 * @property 'BASIC'|'ENHANCED' $TaskMode
 */
class CreateTaskRequest extends Request
{
    /**
     * @param array{
     *     SourceLocationArn: string,
     *     DestinationLocationArn: string,
     *     CloudWatchLogGroupArn?: string,
     *     Name?: string,
     *     Options?: Shapes\Options,
     *     Excludes?: list<Shapes\FilterRule>,
     *     Schedule?: Shapes\TaskSchedule,
     *     Tags?: list<Shapes\TagListEntry>,
     *     Includes?: list<Shapes\FilterRule>,
     *     ManifestConfig?: Shapes\ManifestConfig,
     *     TaskReportConfig?: Shapes\TaskReportConfig,
     *     TaskMode?: 'BASIC'|'ENHANCED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
