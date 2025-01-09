<?php

namespace Sunaoka\Aws\Structures\Backup\DescribeRecoveryPoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $MoveToColdStorageAt
 * @property \Aws\Api\DateTimeResult $DeleteAt
 */
class CalculatedLifecycle extends Shape
{
    /**
     * @param array{
     *     MoveToColdStorageAt?: \Aws\Api\DateTimeResult,
     *     DeleteAt?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
