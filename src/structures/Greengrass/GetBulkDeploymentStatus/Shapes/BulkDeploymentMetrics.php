<?php

namespace Sunaoka\Aws\Structures\Greengrass\GetBulkDeploymentStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $InvalidInputRecords
 * @property int $RecordsProcessed
 * @property int $RetryAttempts
 */
class BulkDeploymentMetrics extends Shape
{
    /**
     * @param array{
     *     InvalidInputRecords?: int,
     *     RecordsProcessed?: int,
     *     RetryAttempts?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
