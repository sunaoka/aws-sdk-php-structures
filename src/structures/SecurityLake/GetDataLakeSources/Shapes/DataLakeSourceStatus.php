<?php

namespace Sunaoka\Aws\Structures\SecurityLake\GetDataLakeSources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $resource
 * @property 'COLLECTING'|'MISCONFIGURED'|'NOT_COLLECTING'|null $status
 */
class DataLakeSourceStatus extends Shape
{
    /**
     * @param array{
     *     resource?: string|null,
     *     status?: 'COLLECTING'|'MISCONFIGURED'|'NOT_COLLECTING'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
