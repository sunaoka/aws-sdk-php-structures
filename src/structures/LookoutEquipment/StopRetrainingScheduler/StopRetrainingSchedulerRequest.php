<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\StopRetrainingScheduler;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ModelName
 */
class StopRetrainingSchedulerRequest extends Request
{
    /**
     * @param array{ModelName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
