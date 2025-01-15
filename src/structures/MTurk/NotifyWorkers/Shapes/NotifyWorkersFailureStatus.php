<?php

namespace Sunaoka\Aws\Structures\MTurk\NotifyWorkers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SoftFailure'|'HardFailure'|null $NotifyWorkersFailureCode
 * @property string|null $NotifyWorkersFailureMessage
 * @property string|null $WorkerId
 */
class NotifyWorkersFailureStatus extends Shape
{
    /**
     * @param array{
     *     NotifyWorkersFailureCode?: 'SoftFailure'|'HardFailure'|null,
     *     NotifyWorkersFailureMessage?: string|null,
     *     WorkerId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
