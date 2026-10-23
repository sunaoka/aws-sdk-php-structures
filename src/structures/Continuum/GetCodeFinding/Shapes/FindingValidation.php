<?php

namespace Sunaoka\Aws\Structures\Continuum\GetCodeFinding\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'TRUE_POSITIVE'|'FALSE_POSITIVE'|'BENIGN_TRUE_POSITIVE'|'NEEDS_REVIEW' $verdict
 * @property 'UNREACHABLE'|'PROTECTED'|'MISCLASSIFIED'|'EXCLUDED'|'NOT_FEASIBLE'|'RISK_MITIGATED'|'NONE'|null $blockingReason
 * @property double|null $confidence
 * @property string|null $rationale
 * @property 'CRITICAL'|'HIGH'|'MEDIUM'|'LOW'|'INFORMATIONAL'|'UNCHANGED'|null $severityAdjustment
 * @property list<string>|null $mitigatingControls
 * @property list<string>|null $preconditions
 * @property list<FindingEvidence>|null $evidence
 */
class FindingValidation extends Shape
{
    /**
     * @param array{
     *     verdict: 'TRUE_POSITIVE'|'FALSE_POSITIVE'|'BENIGN_TRUE_POSITIVE'|'NEEDS_REVIEW',
     *     blockingReason?: 'UNREACHABLE'|'PROTECTED'|'MISCLASSIFIED'|'EXCLUDED'|'NOT_FEASIBLE'|'RISK_MITIGATED'|'NONE'|null,
     *     confidence?: double|null,
     *     rationale?: string|null,
     *     severityAdjustment?: 'CRITICAL'|'HIGH'|'MEDIUM'|'LOW'|'INFORMATIONAL'|'UNCHANGED'|null,
     *     mitigatingControls?: list<string>|null,
     *     preconditions?: list<string>|null,
     *     evidence?: list<FindingEvidence>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
