<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\ListRetrainingSchedulers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ModelName
 * @property string $ModelArn
 * @property 'PENDING'|'RUNNING'|'STOPPING'|'STOPPED' $Status
 * @property \Aws\Api\DateTimeResult $RetrainingStartDate
 * @property string $RetrainingFrequency
 * @property string $LookbackWindow
 */
class RetrainingSchedulerSummary extends Shape
{
    /**
     * @param array{
     *     ModelName?: string,
     *     ModelArn?: string,
     *     Status?: 'PENDING'|'RUNNING'|'STOPPING'|'STOPPED',
     *     RetrainingStartDate?: \Aws\Api\DateTimeResult,
     *     RetrainingFrequency?: string,
     *     LookbackWindow?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
