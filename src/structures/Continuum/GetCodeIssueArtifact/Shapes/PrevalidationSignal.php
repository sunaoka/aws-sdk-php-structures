<?php

namespace Sunaoka\Aws\Structures\Continuum\GetCodeIssueArtifact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $subjectRef
 * @property 'EXPLOITABILITY'|'BLAST_RADIUS'|'NETWORK_EXPOSURE'|'PRECONDITION'|'CODE_CONTEXT'|'LIKELIHOOD_ASSESSMENT'|'IMPACT_ASSESSMENT'|null $dimension
 * @property 'NONE'|'WEAK'|'MODERATE'|'STRONG'|null $signalStrength
 * @property string|null $conclusion
 * @property string|null $producerId
 * @property string|null $producerVersion
 * @property double|null $confidence
 * @property SignalConfidenceReasoning|null $confidenceReasoning
 * @property SignalComputation|null $computed
 * @property SignalPreconditions|null $preconditions
 * @property SignalImpactDimensions|null $impactDimensions
 * @property SignalExploitability|null $exploitability
 */
class PrevalidationSignal extends Shape
{
    /**
     * @param array{
     *     subjectRef?: string|null,
     *     dimension?: 'EXPLOITABILITY'|'BLAST_RADIUS'|'NETWORK_EXPOSURE'|'PRECONDITION'|'CODE_CONTEXT'|'LIKELIHOOD_ASSESSMENT'|'IMPACT_ASSESSMENT'|null,
     *     signalStrength?: 'NONE'|'WEAK'|'MODERATE'|'STRONG'|null,
     *     conclusion?: string|null,
     *     producerId?: string|null,
     *     producerVersion?: string|null,
     *     confidence?: double|null,
     *     confidenceReasoning?: SignalConfidenceReasoning|null,
     *     computed?: SignalComputation|null,
     *     preconditions?: SignalPreconditions|null,
     *     impactDimensions?: SignalImpactDimensions|null,
     *     exploitability?: SignalExploitability|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
