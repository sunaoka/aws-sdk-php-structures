<?php

namespace Sunaoka\Aws\Structures\EntityResolution\GetMatchingJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $inputRecords
 * @property int $matchIDs
 * @property int $recordsNotProcessed
 * @property int $totalRecordsProcessed
 */
class JobMetrics extends Shape
{
    /**
     * @param array{
     *     inputRecords?: int,
     *     matchIDs?: int,
     *     recordsNotProcessed?: int,
     *     totalRecordsProcessed?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
