<?php

namespace Sunaoka\Aws\Structures\WellArchitected\UpdateLensReview\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<SelectedPillar> $SelectedPillars
 */
class JiraSelectedQuestionConfiguration extends Shape
{
    /**
     * @param array{SelectedPillars?: list<SelectedPillar>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
