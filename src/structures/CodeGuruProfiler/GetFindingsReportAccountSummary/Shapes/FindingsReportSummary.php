<?php

namespace Sunaoka\Aws\Structures\CodeGuruProfiler\GetFindingsReportAccountSummary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property \Aws\Api\DateTimeResult $profileEndTime
 * @property \Aws\Api\DateTimeResult $profileStartTime
 * @property string $profilingGroupName
 * @property int $totalNumberOfFindings
 */
class FindingsReportSummary extends Shape
{
    /**
     * @param array{
     *     id?: string,
     *     profileEndTime?: \Aws\Api\DateTimeResult,
     *     profileStartTime?: \Aws\Api\DateTimeResult,
     *     profilingGroupName?: string,
     *     totalNumberOfFindings?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
