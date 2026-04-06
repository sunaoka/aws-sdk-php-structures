<?php

namespace Sunaoka\Aws\Structures\WellArchitected\UpdateLensReview\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PillarId
 * @property list<string>|null $SelectedQuestionIds
 */
class SelectedPillar extends Shape
{
    /**
     * @param array{
     *     PillarId?: string|null,
     *     SelectedQuestionIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
