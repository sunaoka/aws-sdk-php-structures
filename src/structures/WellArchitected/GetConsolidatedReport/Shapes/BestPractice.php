<?php

namespace Sunaoka\Aws\Structures\WellArchitected\GetConsolidatedReport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ChoiceId
 * @property string|null $ChoiceTitle
 */
class BestPractice extends Shape
{
    /**
     * @param array{
     *     ChoiceId?: string|null,
     *     ChoiceTitle?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
