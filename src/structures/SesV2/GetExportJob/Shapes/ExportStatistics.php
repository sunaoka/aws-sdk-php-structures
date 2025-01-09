<?php

namespace Sunaoka\Aws\Structures\SesV2\GetExportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $ProcessedRecordsCount
 * @property int $ExportedRecordsCount
 */
class ExportStatistics extends Shape
{
    /**
     * @param array{
     *     ProcessedRecordsCount?: int,
     *     ExportedRecordsCount?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
