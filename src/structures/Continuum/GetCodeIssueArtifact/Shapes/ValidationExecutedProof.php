<?php

namespace Sunaoka\Aws\Structures\Continuum\GetCodeIssueArtifact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ValidationProofCode $code
 * @property ValidationProofOutput|null $output
 * @property 'DATA_LEAKED'|'ERROR_REVEALED'|'BEHAVIOR_CHANGED'|'NO_EFFECT'|null $observedEffect
 */
class ValidationExecutedProof extends Shape
{
    /**
     * @param array{
     *     code: ValidationProofCode,
     *     output?: ValidationProofOutput|null,
     *     observedEffect?: 'DATA_LEAKED'|'ERROR_REVEALED'|'BEHAVIOR_CHANGED'|'NO_EFFECT'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
