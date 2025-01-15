<?php

namespace Sunaoka\Aws\Structures\DataSync\CreateTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SourceLocationArn
 * @property string $DestinationLocationArn
 * @property string|null $CloudWatchLogGroupArn
 * @property string|null $Name
 * @property Shapes\Options|null $Options
 * @property list<Shapes\FilterRule>|null $Excludes
 * @property Shapes\TaskSchedule|null $Schedule
 * @property list<Shapes\TagListEntry>|null $Tags
 * @property list<Shapes\FilterRule>|null $Includes
 * @property Shapes\ManifestConfig|null $ManifestConfig
 * @property Shapes\TaskReportConfig|null $TaskReportConfig
 * @property 'BASIC'|'ENHANCED'|null $TaskMode
 */
class CreateTaskRequest extends Request
{
    /**
     * @param array{
     *     SourceLocationArn: string,
     *     DestinationLocationArn: string,
     *     CloudWatchLogGroupArn?: string|null,
     *     Name?: string|null,
     *     Options?: Shapes\Options|null,
     *     Excludes?: list<Shapes\FilterRule>|null,
     *     Schedule?: Shapes\TaskSchedule|null,
     *     Tags?: list<Shapes\TagListEntry>|null,
     *     Includes?: list<Shapes\FilterRule>|null,
     *     ManifestConfig?: Shapes\ManifestConfig|null,
     *     TaskReportConfig?: Shapes\TaskReportConfig|null,
     *     TaskMode?: 'BASIC'|'ENHANCED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
