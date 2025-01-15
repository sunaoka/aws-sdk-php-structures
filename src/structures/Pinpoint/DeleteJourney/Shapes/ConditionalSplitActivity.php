<?php

namespace Sunaoka\Aws\Structures\Pinpoint\DeleteJourney\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Condition|null $Condition
 * @property WaitTime|null $EvaluationWaitTime
 * @property string|null $FalseActivity
 * @property string|null $TrueActivity
 */
class ConditionalSplitActivity extends Shape
{
    /**
     * @param array{
     *     Condition?: Condition|null,
     *     EvaluationWaitTime?: WaitTime|null,
     *     FalseActivity?: string|null,
     *     TrueActivity?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
