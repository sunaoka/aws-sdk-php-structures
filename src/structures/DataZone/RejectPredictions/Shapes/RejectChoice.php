<?php

namespace Sunaoka\Aws\Structures\DataZone\RejectPredictions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $predictionTarget
 * @property list<int>|null $predictionChoices
 */
class RejectChoice extends Shape
{
    /**
     * @param array{
     *     predictionTarget: string,
     *     predictionChoices?: list<int>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
