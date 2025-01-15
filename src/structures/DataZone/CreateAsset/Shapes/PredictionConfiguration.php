<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateAsset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BusinessNameGenerationConfiguration|null $businessNameGeneration
 */
class PredictionConfiguration extends Shape
{
    /**
     * @param array{businessNameGeneration?: BusinessNameGenerationConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
