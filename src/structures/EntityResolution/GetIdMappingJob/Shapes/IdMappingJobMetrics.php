<?php

namespace Sunaoka\Aws\Structures\EntityResolution\GetIdMappingJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $inputRecords
 * @property int $recordsNotProcessed
 * @property int $totalMappedRecords
 * @property int $totalMappedSourceRecords
 * @property int $totalMappedTargetRecords
 * @property int $totalRecordsProcessed
 */
class IdMappingJobMetrics extends Shape
{
    /**
     * @param array{
     *     inputRecords?: int,
     *     recordsNotProcessed?: int,
     *     totalMappedRecords?: int,
     *     totalMappedSourceRecords?: int,
     *     totalMappedTargetRecords?: int,
     *     totalRecordsProcessed?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
