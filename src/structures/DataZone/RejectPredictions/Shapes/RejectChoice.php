<?php

namespace Sunaoka\Aws\Structures\DataZone\RejectPredictions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<int> $predictionChoices
 * @property string $predictionTarget
 */
class RejectChoice extends Shape
{
    /**
     * @param array{
     *     predictionChoices?: list<int>,
     *     predictionTarget: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
