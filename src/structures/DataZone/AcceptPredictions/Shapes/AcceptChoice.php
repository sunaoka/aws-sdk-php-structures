<?php

namespace Sunaoka\Aws\Structures\DataZone\AcceptPredictions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $predictionTarget
 * @property int|null $predictionChoice
 * @property string|null $editedValue
 */
class AcceptChoice extends Shape
{
    /**
     * @param array{
     *     predictionTarget: string,
     *     predictionChoice?: int|null,
     *     editedValue?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
