<?php

namespace Sunaoka\Aws\Structures\ApplicationDiscoveryService\BatchDeleteImportData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $importTaskId
 * @property 'NOT_FOUND'|'INTERNAL_SERVER_ERROR'|'OVER_LIMIT' $errorCode
 * @property string $errorDescription
 */
class BatchDeleteImportDataError extends Shape
{
    /**
     * @param array{
     *     importTaskId?: string,
     *     errorCode?: 'NOT_FOUND'|'INTERNAL_SERVER_ERROR'|'OVER_LIMIT',
     *     errorDescription?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
