<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\StartRetrainingScheduler;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ModelName
 */
class StartRetrainingSchedulerRequest extends Request
{
    /**
     * @param array{ModelName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
