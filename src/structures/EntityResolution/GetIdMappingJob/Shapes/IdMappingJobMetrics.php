<?php

namespace Sunaoka\Aws\Structures\EntityResolution\GetIdMappingJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $inputRecords
 * @property int|null $totalRecordsProcessed
 * @property int|null $recordsNotProcessed
 * @property int|null $deleteRecordsProcessed
 * @property int|null $totalMappedRecords
 * @property int|null $totalMappedSourceRecords
 * @property int|null $totalMappedTargetRecords
 * @property int|null $uniqueRecordsLoaded
 * @property int|null $newMappedRecords
 * @property int|null $newMappedSourceRecords
 * @property int|null $newMappedTargetRecords
 * @property int|null $newUniqueRecordsLoaded
 * @property int|null $mappedRecordsRemoved
 * @property int|null $mappedSourceRecordsRemoved
 * @property int|null $mappedTargetRecordsRemoved
 */
class IdMappingJobMetrics extends Shape
{
    /**
     * @param array{
     *     inputRecords?: int|null,
     *     totalRecordsProcessed?: int|null,
     *     recordsNotProcessed?: int|null,
     *     deleteRecordsProcessed?: int|null,
     *     totalMappedRecords?: int|null,
     *     totalMappedSourceRecords?: int|null,
     *     totalMappedTargetRecords?: int|null,
     *     uniqueRecordsLoaded?: int|null,
     *     newMappedRecords?: int|null,
     *     newMappedSourceRecords?: int|null,
     *     newMappedTargetRecords?: int|null,
     *     newUniqueRecordsLoaded?: int|null,
     *     mappedRecordsRemoved?: int|null,
     *     mappedSourceRecordsRemoved?: int|null,
     *     mappedTargetRecordsRemoved?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
