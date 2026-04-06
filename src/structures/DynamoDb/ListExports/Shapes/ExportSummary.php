<?php

namespace Sunaoka\Aws\Structures\DynamoDb\ListExports\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ExportArn
 * @property 'IN_PROGRESS'|'COMPLETED'|'FAILED'|null $ExportStatus
 */
class ExportSummary extends Shape
{
    /**
     * @param array{
     *     ExportArn?: string|null,
     *     ExportStatus?: 'IN_PROGRESS'|'COMPLETED'|'FAILED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
