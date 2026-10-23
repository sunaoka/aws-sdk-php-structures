<?php

namespace Sunaoka\Aws\Structures\Continuum\GetCodeIssueArtifact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ValidationEvidenceBody|null $validationEvidence
 * @property PrevalidationSignalsBody|null $prevalidationSignals
 * @property RemediationProposalBody|null $remediationProposal
 * @property PatchBody|null $patch
 * @property string|null $raw
 */
class IssueArtifactBody extends Shape
{
    /**
     * @param array{
     *     validationEvidence?: ValidationEvidenceBody|null,
     *     prevalidationSignals?: PrevalidationSignalsBody|null,
     *     remediationProposal?: RemediationProposalBody|null,
     *     patch?: PatchBody|null,
     *     raw?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
