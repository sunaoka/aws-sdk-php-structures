<?php

namespace Sunaoka\Aws\Structures\DataSync\UpdateTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TaskArn
 * @property Shapes\Options|null $Options
 * @property list<Shapes\FilterRule>|null $Excludes
 * @property Shapes\TaskSchedule|null $Schedule
 * @property string|null $Name
 * @property string|null $CloudWatchLogGroupArn
 * @property list<Shapes\FilterRule>|null $Includes
 * @property Shapes\ManifestConfig|null $ManifestConfig
 * @property Shapes\TaskReportConfig|null $TaskReportConfig
 */
class UpdateTaskRequest extends Request
{
    /**
     * @param array{
     *     TaskArn: string,
     *     Options?: Shapes\Options|null,
     *     Excludes?: list<Shapes\FilterRule>|null,
     *     Schedule?: Shapes\TaskSchedule|null,
     *     Name?: string|null,
     *     CloudWatchLogGroupArn?: string|null,
     *     Includes?: list<Shapes\FilterRule>|null,
     *     ManifestConfig?: Shapes\ManifestConfig|null,
     *     TaskReportConfig?: Shapes\TaskReportConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
