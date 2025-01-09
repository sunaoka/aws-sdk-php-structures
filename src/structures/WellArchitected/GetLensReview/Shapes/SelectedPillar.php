<?php

namespace Sunaoka\Aws\Structures\WellArchitected\GetLensReview\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PillarId
 * @property list<string> $SelectedQuestionIds
 */
class SelectedPillar extends Shape
{
    /**
     * @param array{
     *     PillarId?: string,
     *     SelectedQuestionIds?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
