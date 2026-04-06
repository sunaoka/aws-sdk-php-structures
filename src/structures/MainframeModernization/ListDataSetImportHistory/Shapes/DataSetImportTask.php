<?php

namespace Sunaoka\Aws\Structures\MainframeModernization\ListDataSetImportHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Creating'|'Running'|'Completed' $status
 * @property DataSetImportSummary $summary
 * @property string $taskId
 */
class DataSetImportTask extends Shape
{
    /**
     * @param array{
     *     status: 'Creating'|'Running'|'Completed',
     *     summary: DataSetImportSummary,
     *     taskId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
