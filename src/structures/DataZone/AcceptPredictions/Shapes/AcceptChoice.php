<?php

namespace Sunaoka\Aws\Structures\DataZone\AcceptPredictions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $editedValue
 * @property int $predictionChoice
 * @property string $predictionTarget
 */
class AcceptChoice extends Shape
{
    /**
     * @param array{
     *     editedValue?: string,
     *     predictionChoice?: int,
     *     predictionTarget: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
