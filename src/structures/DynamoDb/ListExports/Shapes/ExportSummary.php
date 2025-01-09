<?php

namespace Sunaoka\Aws\Structures\DynamoDb\ListExports\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ExportArn
 * @property 'IN_PROGRESS'|'COMPLETED'|'FAILED' $ExportStatus
 * @property 'FULL_EXPORT'|'INCREMENTAL_EXPORT' $ExportType
 */
class ExportSummary extends Shape
{
    /**
     * @param array{
     *     ExportArn?: string,
     *     ExportStatus?: 'IN_PROGRESS'|'COMPLETED'|'FAILED',
     *     ExportType?: 'FULL_EXPORT'|'INCREMENTAL_EXPORT'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
