<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateEndpointConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ClarifyShapBaselineConfig $ShapBaselineConfig
 * @property int $NumberOfSamples
 * @property bool $UseLogit
 * @property int $Seed
 * @property ClarifyTextConfig $TextConfig
 */
class ClarifyShapConfig extends Shape
{
    /**
     * @param array{
     *     ShapBaselineConfig: ClarifyShapBaselineConfig,
     *     NumberOfSamples?: int,
     *     UseLogit?: bool,
     *     Seed?: int,
     *     TextConfig?: ClarifyTextConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
