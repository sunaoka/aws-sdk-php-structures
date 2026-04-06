<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\DeleteRetrainingScheduler;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ModelName
 */
class DeleteRetrainingSchedulerRequest extends Request
{
    /**
     * @param array{ModelName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
