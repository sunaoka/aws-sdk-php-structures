<?php

namespace Sunaoka\Aws\Structures\NeptuneGraph\GetExportTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $startTime
 * @property int $timeElapsedSeconds
 * @property int $progressPercentage
 * @property int|null $numVerticesWritten
 * @property int|null $numEdgesWritten
 */
class ExportTaskDetails extends Shape
{
    /**
     * @param array{
     *     startTime: \Aws\Api\DateTimeResult,
     *     timeElapsedSeconds: int,
     *     progressPercentage: int,
     *     numVerticesWritten?: int|null,
     *     numEdgesWritten?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
