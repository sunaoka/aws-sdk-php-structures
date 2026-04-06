<?php

namespace Sunaoka\Aws\Structures\SesV2\GetExportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $ProcessedRecordsCount
 * @property int|null $ExportedRecordsCount
 */
class ExportStatistics extends Shape
{
    /**
     * @param array{
     *     ProcessedRecordsCount?: int|null,
     *     ExportedRecordsCount?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
