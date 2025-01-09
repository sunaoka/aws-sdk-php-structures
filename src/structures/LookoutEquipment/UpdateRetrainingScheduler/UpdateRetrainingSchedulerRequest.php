<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\UpdateRetrainingScheduler;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ModelName
 * @property \Aws\Api\DateTimeResult $RetrainingStartDate
 * @property string $RetrainingFrequency
 * @property string $LookbackWindow
 * @property 'MANAGED'|'MANUAL' $PromoteMode
 */
class UpdateRetrainingSchedulerRequest extends Request
{
    /**
     * @param array{
     *     ModelName: string,
     *     RetrainingStartDate?: \Aws\Api\DateTimeResult,
     *     RetrainingFrequency?: string,
     *     LookbackWindow?: string,
     *     PromoteMode?: 'MANAGED'|'MANUAL'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
