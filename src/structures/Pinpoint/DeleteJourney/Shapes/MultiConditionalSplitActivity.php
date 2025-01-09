<?php

namespace Sunaoka\Aws\Structures\Pinpoint\DeleteJourney\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<MultiConditionalBranch> $Branches
 * @property string $DefaultActivity
 * @property WaitTime $EvaluationWaitTime
 */
class MultiConditionalSplitActivity extends Shape
{
    /**
     * @param array{
     *     Branches?: list<MultiConditionalBranch>,
     *     DefaultActivity?: string,
     *     EvaluationWaitTime?: WaitTime
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
