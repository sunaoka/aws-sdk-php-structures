<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateEndpointConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ClarifyShapBaselineConfig $ShapBaselineConfig
 * @property int<1, max>|null $NumberOfSamples
 * @property bool|null $UseLogit
 * @property int|null $Seed
 * @property ClarifyTextConfig|null $TextConfig
 */
class ClarifyShapConfig extends Shape
{
    /**
     * @param array{
     *     ShapBaselineConfig: ClarifyShapBaselineConfig,
     *     NumberOfSamples?: int<1, max>|null,
     *     UseLogit?: bool|null,
     *     Seed?: int|null,
     *     TextConfig?: ClarifyTextConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
