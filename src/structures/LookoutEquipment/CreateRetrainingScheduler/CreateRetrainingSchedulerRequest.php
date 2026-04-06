<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\CreateRetrainingScheduler;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ModelName
 * @property \Aws\Api\DateTimeResult|null $RetrainingStartDate
 * @property string $RetrainingFrequency
 * @property string $LookbackWindow
 * @property 'MANAGED'|'MANUAL'|null $PromoteMode
 * @property string $ClientToken
 */
class CreateRetrainingSchedulerRequest extends Request
{
    /**
     * @param array{
     *     ModelName: string,
     *     RetrainingStartDate?: \Aws\Api\DateTimeResult|null,
     *     RetrainingFrequency: string,
     *     LookbackWindow: string,
     *     PromoteMode?: 'MANAGED'|'MANUAL'|null,
     *     ClientToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
