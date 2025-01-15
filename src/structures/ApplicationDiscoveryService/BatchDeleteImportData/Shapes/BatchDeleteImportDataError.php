<?php

namespace Sunaoka\Aws\Structures\ApplicationDiscoveryService\BatchDeleteImportData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $importTaskId
 * @property 'NOT_FOUND'|'INTERNAL_SERVER_ERROR'|'OVER_LIMIT'|null $errorCode
 * @property string|null $errorDescription
 */
class BatchDeleteImportDataError extends Shape
{
    /**
     * @param array{
     *     importTaskId?: string|null,
     *     errorCode?: 'NOT_FOUND'|'INTERNAL_SERVER_ERROR'|'OVER_LIMIT'|null,
     *     errorDescription?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
