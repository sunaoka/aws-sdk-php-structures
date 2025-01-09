<?php

namespace Sunaoka\Aws\Structures\Pinpoint\UpdateJourney\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Condition $Condition
 * @property WaitTime $EvaluationWaitTime
 * @property string $FalseActivity
 * @property string $TrueActivity
 */
class ConditionalSplitActivity extends Shape
{
    /**
     * @param array{
     *     Condition?: Condition,
     *     EvaluationWaitTime?: WaitTime,
     *     FalseActivity?: string,
     *     TrueActivity?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
