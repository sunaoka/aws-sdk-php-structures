<?php

namespace Sunaoka\Aws\Structures\S3Tables\GetTableRecordExpirationJobStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $deletedDataFiles
 * @property int|null $deletedRecords
 * @property int|null $removedFilesSize
 */
class TableRecordExpirationJobMetrics extends Shape
{
    /**
     * @param array{
     *     deletedDataFiles?: int|null,
     *     deletedRecords?: int|null,
     *     removedFilesSize?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
