<?php

namespace Sunaoka\Aws\Structures\WellArchitected\GetLensReview\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<SelectedPillar>|null $SelectedPillars
 */
class JiraSelectedQuestionConfiguration extends Shape
{
    /**
     * @param array{SelectedPillars?: list<SelectedPillar>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
