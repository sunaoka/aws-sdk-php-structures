<?php

namespace Sunaoka\Aws\Structures\Batch\CreateJobQueue\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $reason
 * @property 'RUNNABLE' $state
 * @property int $maxTimeSeconds
 * @property 'CANCEL' $action
 */
class JobStateTimeLimitAction extends Shape
{
    /**
     * @param array{
     *     reason: string,
     *     state: 'RUNNABLE',
     *     maxTimeSeconds: int,
     *     action: 'CANCEL'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
