<?php

namespace Sunaoka\Aws\Structures\Macie2\SearchResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'TRUE'|'FALSE'|'UNKNOWN'|null $isDefinedInJob
 * @property 'TRUE'|'FALSE'|'UNKNOWN'|null $isMonitoredByJob
 * @property string|null $lastJobId
 * @property \Aws\Api\DateTimeResult|null $lastJobRunTime
 */
class JobDetails extends Shape
{
    /**
     * @param array{
     *     isDefinedInJob?: 'TRUE'|'FALSE'|'UNKNOWN'|null,
     *     isMonitoredByJob?: 'TRUE'|'FALSE'|'UNKNOWN'|null,
     *     lastJobId?: string|null,
     *     lastJobRunTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
