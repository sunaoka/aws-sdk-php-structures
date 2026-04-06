<?php

namespace Sunaoka\Aws\Structures\EntityResolution\GetMatchingJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $inputRecords
 * @property int|null $matchIDs
 * @property int|null $recordsNotProcessed
 * @property int|null $totalRecordsProcessed
 */
class JobMetrics extends Shape
{
    /**
     * @param array{
     *     inputRecords?: int|null,
     *     matchIDs?: int|null,
     *     recordsNotProcessed?: int|null,
     *     totalRecordsProcessed?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
