<?php

namespace Sunaoka\Aws\Structures\DataZone\AcceptPredictions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $editedValue
 * @property int|null $predictionChoice
 * @property string $predictionTarget
 */
class AcceptChoice extends Shape
{
    /**
     * @param array{
     *     editedValue?: string|null,
     *     predictionChoice?: int|null,
     *     predictionTarget: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
