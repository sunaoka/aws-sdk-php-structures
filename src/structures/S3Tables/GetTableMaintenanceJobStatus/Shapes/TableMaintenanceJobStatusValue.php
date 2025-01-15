<?php

namespace Sunaoka\Aws\Structures\S3Tables\GetTableMaintenanceJobStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Not_Yet_Run'|'Successful'|'Failed'|'Disabled' $status
 * @property \Aws\Api\DateTimeResult|null $lastRunTimestamp
 * @property string|null $failureMessage
 */
class TableMaintenanceJobStatusValue extends Shape
{
    /**
     * @param array{
     *     status: 'Not_Yet_Run'|'Successful'|'Failed'|'Disabled',
     *     lastRunTimestamp?: \Aws\Api\DateTimeResult|null,
     *     failureMessage?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
