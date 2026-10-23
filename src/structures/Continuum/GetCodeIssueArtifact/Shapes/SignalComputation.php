<?php

namespace Sunaoka\Aws\Structures\Continuum\GetCodeIssueArtifact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'VERY_LOW'|'LOW'|'MODERATE'|'HIGH'|null $likelihoodBand
 * @property 'VERY_LOW'|'LOW'|'MODERATE'|'HIGH'|null $impactBand
 * @property int|null $barriers
 */
class SignalComputation extends Shape
{
    /**
     * @param array{
     *     likelihoodBand?: 'VERY_LOW'|'LOW'|'MODERATE'|'HIGH'|null,
     *     impactBand?: 'VERY_LOW'|'LOW'|'MODERATE'|'HIGH'|null,
     *     barriers?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
