<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\GetConfiguredModelAlgorithmAssociation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'HIGH'|'MEDIUM'|'LOW'|'NONE' $noiseLevel
 */
class MetricsConfigurationPolicy extends Shape
{
    /**
     * @param array{noiseLevel: 'HIGH'|'MEDIUM'|'LOW'|'NONE'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
