<?php

namespace Sunaoka\Aws\Structures\MainframeModernization\GetDataSetExportTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $failed
 * @property int $inProgress
 * @property int $pending
 * @property int $succeeded
 * @property int $total
 */
class DataSetExportSummary extends Shape
{
    /**
     * @param array{
     *     failed: int,
     *     inProgress: int,
     *     pending: int,
     *     succeeded: int,
     *     total: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
