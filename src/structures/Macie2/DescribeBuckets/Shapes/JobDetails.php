<?php

namespace Sunaoka\Aws\Structures\Macie2\DescribeBuckets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'TRUE'|'FALSE'|'UNKNOWN' $isDefinedInJob
 * @property 'TRUE'|'FALSE'|'UNKNOWN' $isMonitoredByJob
 * @property string $lastJobId
 * @property \Aws\Api\DateTimeResult $lastJobRunTime
 */
class JobDetails extends Shape
{
    /**
     * @param array{
     *     isDefinedInJob?: 'TRUE'|'FALSE'|'UNKNOWN',
     *     isMonitoredByJob?: 'TRUE'|'FALSE'|'UNKNOWN',
     *     lastJobId?: string,
     *     lastJobRunTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
