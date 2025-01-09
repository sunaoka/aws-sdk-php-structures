<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateEndpointConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ClarifyShapBaselineConfig $ShapBaselineConfig
 * @property int<1, max> $NumberOfSamples
 * @property bool $UseLogit
 * @property int $Seed
 * @property ClarifyTextConfig $TextConfig
 */
class ClarifyShapConfig extends Shape
{
    /**
     * @param array{
     *     ShapBaselineConfig: ClarifyShapBaselineConfig,
     *     NumberOfSamples?: int<1, max>,
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
