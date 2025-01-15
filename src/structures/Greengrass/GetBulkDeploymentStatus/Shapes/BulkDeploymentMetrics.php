<?php

namespace Sunaoka\Aws\Structures\Greengrass\GetBulkDeploymentStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $InvalidInputRecords
 * @property int|null $RecordsProcessed
 * @property int|null $RetryAttempts
 */
class BulkDeploymentMetrics extends Shape
{
    /**
     * @param array{
     *     InvalidInputRecords?: int|null,
     *     RecordsProcessed?: int|null,
     *     RetryAttempts?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
