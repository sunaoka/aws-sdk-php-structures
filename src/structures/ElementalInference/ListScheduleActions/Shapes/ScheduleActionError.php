<?php

namespace Sunaoka\Aws\Structures\ElementalInference\ListScheduleActions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'INVALID_ACTION_TARGET'|'INTERNAL_ERROR' $errorCode
 * @property string $errorMessage
 */
class ScheduleActionError extends Shape
{
    /**
     * @param array{
     *     errorCode: 'INVALID_ACTION_TARGET'|'INTERNAL_ERROR',
     *     errorMessage: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
