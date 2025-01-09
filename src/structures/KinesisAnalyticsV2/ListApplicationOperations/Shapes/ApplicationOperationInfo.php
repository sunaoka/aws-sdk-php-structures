<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\ListApplicationOperations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Operation
 * @property string $OperationId
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property 'IN_PROGRESS'|'CANCELLED'|'SUCCESSFUL'|'FAILED' $OperationStatus
 */
class ApplicationOperationInfo extends Shape
{
    /**
     * @param array{
     *     Operation?: string,
     *     OperationId?: string,
     *     StartTime?: \Aws\Api\DateTimeResult,
     *     EndTime?: \Aws\Api\DateTimeResult,
     *     OperationStatus?: 'IN_PROGRESS'|'CANCELLED'|'SUCCESSFUL'|'FAILED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
