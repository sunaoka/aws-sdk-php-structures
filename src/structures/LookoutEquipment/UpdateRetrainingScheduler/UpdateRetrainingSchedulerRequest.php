<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\UpdateRetrainingScheduler;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ModelName
 * @property \Aws\Api\DateTimeResult|null $RetrainingStartDate
 * @property string|null $RetrainingFrequency
 * @property string|null $LookbackWindow
 * @property 'MANAGED'|'MANUAL'|null $PromoteMode
 */
class UpdateRetrainingSchedulerRequest extends Request
{
    /**
     * @param array{
     *     ModelName: string,
     *     RetrainingStartDate?: \Aws\Api\DateTimeResult|null,
     *     RetrainingFrequency?: string|null,
     *     LookbackWindow?: string|null,
     *     PromoteMode?: 'MANAGED'|'MANUAL'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
