<?php

namespace Sunaoka\Aws\Structures\SecurityLake\GetDataLakeSources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $resource
 * @property 'COLLECTING'|'MISCONFIGURED'|'NOT_COLLECTING' $status
 */
class DataLakeSourceStatus extends Shape
{
    /**
     * @param array{
     *     resource?: string,
     *     status?: 'COLLECTING'|'MISCONFIGURED'|'NOT_COLLECTING'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
