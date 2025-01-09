<?php

namespace Sunaoka\Aws\Structures\MTurk\NotifyWorkers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SoftFailure'|'HardFailure' $NotifyWorkersFailureCode
 * @property string $NotifyWorkersFailureMessage
 * @property string $WorkerId
 */
class NotifyWorkersFailureStatus extends Shape
{
    /**
     * @param array{
     *     NotifyWorkersFailureCode?: 'SoftFailure'|'HardFailure',
     *     NotifyWorkersFailureMessage?: string,
     *     WorkerId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
