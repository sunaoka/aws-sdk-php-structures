<?php

namespace Sunaoka\Aws\Structures\S3Tables\GetTableMaintenanceJobStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Not_Yet_Run'|'Successful'|'Failed'|'Disabled' $status
 * @property \Aws\Api\DateTimeResult $lastRunTimestamp
 * @property string $failureMessage
 */
class TableMaintenanceJobStatusValue extends Shape
{
    /**
     * @param array{
     *     status: 'Not_Yet_Run'|'Successful'|'Failed'|'Disabled',
     *     lastRunTimestamp?: \Aws\Api\DateTimeResult,
     *     failureMessage?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
