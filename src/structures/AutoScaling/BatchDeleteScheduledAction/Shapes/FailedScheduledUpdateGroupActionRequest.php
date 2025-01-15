<?php

namespace Sunaoka\Aws\Structures\AutoScaling\BatchDeleteScheduledAction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ScheduledActionName
 * @property string|null $ErrorCode
 * @property string|null $ErrorMessage
 */
class FailedScheduledUpdateGroupActionRequest extends Shape
{
    /**
     * @param array{
     *     ScheduledActionName: string,
     *     ErrorCode?: string|null,
     *     ErrorMessage?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
