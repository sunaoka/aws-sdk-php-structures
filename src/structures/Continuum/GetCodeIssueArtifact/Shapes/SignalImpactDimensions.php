<?php

namespace Sunaoka\Aws\Structures\Continuum\GetCodeIssueArtifact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SignalAttackerGainsDimension|null $attackerGains
 * @property SignalBlastRadiusDimension|null $blastRadius
 * @property SignalTargetValueDimension|null $targetValue
 */
class SignalImpactDimensions extends Shape
{
    /**
     * @param array{
     *     attackerGains?: SignalAttackerGainsDimension|null,
     *     blastRadius?: SignalBlastRadiusDimension|null,
     *     targetValue?: SignalTargetValueDimension|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
