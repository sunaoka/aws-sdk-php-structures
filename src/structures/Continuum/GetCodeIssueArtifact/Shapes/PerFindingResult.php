<?php

namespace Sunaoka\Aws\Structures\Continuum\GetCodeIssueArtifact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $findingId
 * @property 'EXPLOITABLE'|'NOT_EXPLOITABLE'|'UNCERTAIN' $exploitable
 * @property double|null $confidence
 * @property list<FlowVerdict>|null $flowVerdicts
 * @property list<ReasoningStep>|null $reasoningChain
 * @property ValidationExploitArtifact|null $exploitArtifact
 */
class PerFindingResult extends Shape
{
    /**
     * @param array{
     *     findingId: string,
     *     exploitable: 'EXPLOITABLE'|'NOT_EXPLOITABLE'|'UNCERTAIN',
     *     confidence?: double|null,
     *     flowVerdicts?: list<FlowVerdict>|null,
     *     reasoningChain?: list<ReasoningStep>|null,
     *     exploitArtifact?: ValidationExploitArtifact|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
