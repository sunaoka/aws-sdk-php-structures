<?php

namespace Sunaoka\Aws\Structures\CodeGuruProfiler\GetFindingsReportAccountSummary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property \Aws\Api\DateTimeResult|null $profileEndTime
 * @property \Aws\Api\DateTimeResult|null $profileStartTime
 * @property string|null $profilingGroupName
 * @property int|null $totalNumberOfFindings
 */
class FindingsReportSummary extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     profileEndTime?: \Aws\Api\DateTimeResult|null,
     *     profileStartTime?: \Aws\Api\DateTimeResult|null,
     *     profilingGroupName?: string|null,
     *     totalNumberOfFindings?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
