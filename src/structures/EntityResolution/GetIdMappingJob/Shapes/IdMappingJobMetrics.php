<?php

namespace Sunaoka\Aws\Structures\EntityResolution\GetIdMappingJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $inputRecords
 * @property int|null $recordsNotProcessed
 * @property int|null $totalMappedRecords
 * @property int|null $totalMappedSourceRecords
 * @property int|null $totalMappedTargetRecords
 * @property int|null $totalRecordsProcessed
 */
class IdMappingJobMetrics extends Shape
{
    /**
     * @param array{
     *     inputRecords?: int|null,
     *     recordsNotProcessed?: int|null,
     *     totalMappedRecords?: int|null,
     *     totalMappedSourceRecords?: int|null,
     *     totalMappedTargetRecords?: int|null,
     *     totalRecordsProcessed?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
