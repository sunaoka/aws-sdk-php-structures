<?php

namespace Sunaoka\Aws\Structures\EntityResolution\GetMatchingJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $inputRecords
 * @property int|null $totalRecordsProcessed
 * @property int|null $recordsNotProcessed
 * @property int|null $matchIDs
 */
class JobMetrics extends Shape
{
    /**
     * @param array{
     *     inputRecords?: int|null,
     *     totalRecordsProcessed?: int|null,
     *     recordsNotProcessed?: int|null,
     *     matchIDs?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
