<?php

namespace Sunaoka\Aws\Structures\SecurityLake\CreateDataLake\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $code
 * @property string|null $reason
 */
class DataLakeUpdateException extends Shape
{
    /**
     * @param array{
     *     code?: string|null,
     *     reason?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
