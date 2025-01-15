<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\ListPipelines\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property 'RUNNING'|'SUCCEEDED'|'CANCELLED'|'FAILED'|null $status
 * @property \Aws\Api\DateTimeResult|null $creationTime
 */
class ReprocessingSummary extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     status?: 'RUNNING'|'SUCCEEDED'|'CANCELLED'|'FAILED'|null,
     *     creationTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
