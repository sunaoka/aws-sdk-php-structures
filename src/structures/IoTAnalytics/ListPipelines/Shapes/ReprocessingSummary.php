<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\ListPipelines\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property 'RUNNING'|'SUCCEEDED'|'CANCELLED'|'FAILED' $status
 * @property \Aws\Api\DateTimeResult $creationTime
 */
class ReprocessingSummary extends Shape
{
    /**
     * @param array{
     *     id?: string,
     *     status?: 'RUNNING'|'SUCCEEDED'|'CANCELLED'|'FAILED',
     *     creationTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
