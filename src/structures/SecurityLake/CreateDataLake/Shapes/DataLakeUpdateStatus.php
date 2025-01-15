<?php

namespace Sunaoka\Aws\Structures\SecurityLake\CreateDataLake\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DataLakeUpdateException|null $exception
 * @property string|null $requestId
 * @property 'INITIALIZED'|'PENDING'|'COMPLETED'|'FAILED'|null $status
 */
class DataLakeUpdateStatus extends Shape
{
    /**
     * @param array{
     *     exception?: DataLakeUpdateException|null,
     *     requestId?: string|null,
     *     status?: 'INITIALIZED'|'PENDING'|'COMPLETED'|'FAILED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
