<?php

namespace Sunaoka\Aws\Structures\MainframeModernization\ListDataSetExportHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Creating'|'Running'|'Completed'|'Failed' $status
 * @property string|null $statusReason
 * @property DataSetExportSummary $summary
 * @property string $taskId
 */
class DataSetExportTask extends Shape
{
    /**
     * @param array{
     *     status: 'Creating'|'Running'|'Completed'|'Failed',
     *     statusReason?: string|null,
     *     summary: DataSetExportSummary,
     *     taskId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
