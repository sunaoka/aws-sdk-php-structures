<?php

namespace Sunaoka\Aws\Structures\AutoScaling\BatchPutScheduledUpdateGroupAction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ScheduledActionName
 * @property string $ErrorCode
 * @property string $ErrorMessage
 */
class FailedScheduledUpdateGroupActionRequest extends Shape
{
    /**
     * @param array{
     *     ScheduledActionName: string,
     *     ErrorCode?: string,
     *     ErrorMessage?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
