<?php

namespace Sunaoka\Aws\Structures\WellArchitected\GetConsolidatedReport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ChoiceId
 * @property string $ChoiceTitle
 */
class BestPractice extends Shape
{
    /**
     * @param array{
     *     ChoiceId?: string,
     *     ChoiceTitle?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
