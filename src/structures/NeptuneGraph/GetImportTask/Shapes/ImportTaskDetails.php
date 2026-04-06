<?php

namespace Sunaoka\Aws\Structures\NeptuneGraph\GetImportTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $status
 * @property \Aws\Api\DateTimeResult $startTime
 * @property int $timeElapsedSeconds
 * @property int $progressPercentage
 * @property int $errorCount
 * @property string|null $errorDetails
 * @property int $statementCount
 * @property int $dictionaryEntryCount
 */
class ImportTaskDetails extends Shape
{
    /**
     * @param array{
     *     status: string,
     *     startTime: \Aws\Api\DateTimeResult,
     *     timeElapsedSeconds: int,
     *     progressPercentage: int,
     *     errorCount: int,
     *     errorDetails?: string|null,
     *     statementCount: int,
     *     dictionaryEntryCount: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
