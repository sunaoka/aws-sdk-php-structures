<?php

namespace Sunaoka\Aws\Structures\Pinpoint\CreateJourney\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<MultiConditionalBranch>|null $Branches
 * @property string|null $DefaultActivity
 * @property WaitTime|null $EvaluationWaitTime
 */
class MultiConditionalSplitActivity extends Shape
{
    /**
     * @param array{
     *     Branches?: list<MultiConditionalBranch>|null,
     *     DefaultActivity?: string|null,
     *     EvaluationWaitTime?: WaitTime|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
