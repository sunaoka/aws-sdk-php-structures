<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\ListRetrainingSchedulers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ModelName
 * @property string|null $ModelArn
 * @property 'PENDING'|'RUNNING'|'STOPPING'|'STOPPED'|null $Status
 * @property \Aws\Api\DateTimeResult|null $RetrainingStartDate
 * @property string|null $RetrainingFrequency
 * @property string|null $LookbackWindow
 */
class RetrainingSchedulerSummary extends Shape
{
    /**
     * @param array{
     *     ModelName?: string|null,
     *     ModelArn?: string|null,
     *     Status?: 'PENDING'|'RUNNING'|'STOPPING'|'STOPPED'|null,
     *     RetrainingStartDate?: \Aws\Api\DateTimeResult|null,
     *     RetrainingFrequency?: string|null,
     *     LookbackWindow?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
