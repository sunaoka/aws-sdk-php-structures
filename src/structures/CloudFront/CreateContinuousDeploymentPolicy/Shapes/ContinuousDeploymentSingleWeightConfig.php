<?php

namespace Sunaoka\Aws\Structures\CloudFront\CreateContinuousDeploymentPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property float $Weight
 * @property SessionStickinessConfig $SessionStickinessConfig
 */
class ContinuousDeploymentSingleWeightConfig extends Shape
{
    /**
     * @param array{
     *     Weight: float,
     *     SessionStickinessConfig?: SessionStickinessConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
