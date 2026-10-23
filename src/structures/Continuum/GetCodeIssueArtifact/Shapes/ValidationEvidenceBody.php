<?php

namespace Sunaoka\Aws\Structures\Continuum\GetCodeIssueArtifact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EXPLOITABLE'|'NOT_EXPLOITABLE'|'UNCERTAIN' $exploitable
 * @property 'COMPLETED'|'FAILED'|'NO_SOURCE_AVAILABLE'|'PARTIAL'|null $terminalStatus
 * @property list<FlowVerdict>|null $flowVerdicts
 * @property list<string>|null $attackFlowsConfirmed
 * @property ValidationExploitArtifact|null $exploitArtifact
 * @property ValidationExecutedProof|null $executedProof
 * @property ValidationSourceAnalysis|null $sourceAnalysis
 * @property list<PerFindingResult>|null $perFindingResults
 */
class ValidationEvidenceBody extends Shape
{
    /**
     * @param array{
     *     exploitable: 'EXPLOITABLE'|'NOT_EXPLOITABLE'|'UNCERTAIN',
     *     terminalStatus?: 'COMPLETED'|'FAILED'|'NO_SOURCE_AVAILABLE'|'PARTIAL'|null,
     *     flowVerdicts?: list<FlowVerdict>|null,
     *     attackFlowsConfirmed?: list<string>|null,
     *     exploitArtifact?: ValidationExploitArtifact|null,
     *     executedProof?: ValidationExecutedProof|null,
     *     sourceAnalysis?: ValidationSourceAnalysis|null,
     *     perFindingResults?: list<PerFindingResult>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
