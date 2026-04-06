<?php

namespace Sunaoka\Aws\Structures\DataSync\DescribeTaskExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ReportDestination|null $Destination
 * @property 'SUMMARY_ONLY'|'STANDARD'|null $OutputType
 * @property 'ERRORS_ONLY'|'SUCCESSES_AND_ERRORS'|null $ReportLevel
 * @property 'INCLUDE'|'NONE'|null $ObjectVersionIds
 * @property ReportOverrides|null $Overrides
 */
class TaskReportConfig extends Shape
{
    /**
     * @param array{
     *     Destination?: ReportDestination|null,
     *     OutputType?: 'SUMMARY_ONLY'|'STANDARD'|null,
     *     ReportLevel?: 'ERRORS_ONLY'|'SUCCESSES_AND_ERRORS'|null,
     *     ObjectVersionIds?: 'INCLUDE'|'NONE'|null,
     *     Overrides?: ReportOverrides|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
