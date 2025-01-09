<?php

namespace Sunaoka\Aws\Structures\DataSync\DescribeTaskExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ReportDestination $Destination
 * @property 'SUMMARY_ONLY'|'STANDARD' $OutputType
 * @property 'ERRORS_ONLY'|'SUCCESSES_AND_ERRORS' $ReportLevel
 * @property 'INCLUDE'|'NONE' $ObjectVersionIds
 * @property ReportOverrides $Overrides
 */
class TaskReportConfig extends Shape
{
    /**
     * @param array{
     *     Destination?: ReportDestination,
     *     OutputType?: 'SUMMARY_ONLY'|'STANDARD',
     *     ReportLevel?: 'ERRORS_ONLY'|'SUCCESSES_AND_ERRORS',
     *     ObjectVersionIds?: 'INCLUDE'|'NONE',
     *     Overrides?: ReportOverrides
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
