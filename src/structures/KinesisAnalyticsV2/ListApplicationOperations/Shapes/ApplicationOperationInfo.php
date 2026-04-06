<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\ListApplicationOperations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Operation
 * @property string|null $OperationId
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property \Aws\Api\DateTimeResult|null $EndTime
 * @property 'IN_PROGRESS'|'CANCELLED'|'SUCCESSFUL'|'FAILED'|null $OperationStatus
 */
class ApplicationOperationInfo extends Shape
{
    /**
     * @param array{
     *     Operation?: string|null,
     *     OperationId?: string|null,
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     EndTime?: \Aws\Api\DateTimeResult|null,
     *     OperationStatus?: 'IN_PROGRESS'|'CANCELLED'|'SUCCESSFUL'|'FAILED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
