<?php

namespace Sunaoka\Aws\Structures\Backup\DescribeRecoveryPoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $MoveToColdStorageAt
 * @property \Aws\Api\DateTimeResult|null $DeleteAt
 */
class CalculatedLifecycle extends Shape
{
    /**
     * @param array{
     *     MoveToColdStorageAt?: \Aws\Api\DateTimeResult|null,
     *     DeleteAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
