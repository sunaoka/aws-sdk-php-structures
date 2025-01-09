<?php

namespace Sunaoka\Aws\Structures\DataSync\UpdateTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TaskArn
 * @property Shapes\Options $Options
 * @property list<Shapes\FilterRule> $Excludes
 * @property Shapes\TaskSchedule $Schedule
 * @property string $Name
 * @property string $CloudWatchLogGroupArn
 * @property list<Shapes\FilterRule> $Includes
 * @property Shapes\ManifestConfig $ManifestConfig
 * @property Shapes\TaskReportConfig $TaskReportConfig
 */
class UpdateTaskRequest extends Request
{
    /**
     * @param array{
     *     TaskArn: string,
     *     Options?: Shapes\Options,
     *     Excludes?: list<Shapes\FilterRule>,
     *     Schedule?: Shapes\TaskSchedule,
     *     Name?: string,
     *     CloudWatchLogGroupArn?: string,
     *     Includes?: list<Shapes\FilterRule>,
     *     ManifestConfig?: Shapes\ManifestConfig,
     *     TaskReportConfig?: Shapes\TaskReportConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
