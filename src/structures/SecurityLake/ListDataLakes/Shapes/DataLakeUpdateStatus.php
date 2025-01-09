<?php

namespace Sunaoka\Aws\Structures\SecurityLake\ListDataLakes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DataLakeUpdateException $exception
 * @property string $requestId
 * @property 'INITIALIZED'|'PENDING'|'COMPLETED'|'FAILED' $status
 */
class DataLakeUpdateStatus extends Shape
{
    /**
     * @param array{
     *     exception?: DataLakeUpdateException,
     *     requestId?: string,
     *     status?: 'INITIALIZED'|'PENDING'|'COMPLETED'|'FAILED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
