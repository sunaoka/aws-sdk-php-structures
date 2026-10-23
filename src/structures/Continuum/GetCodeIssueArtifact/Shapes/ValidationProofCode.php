<?php

namespace Sunaoka\Aws\Structures\Continuum\GetCodeIssueArtifact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ValidationProofMaterial> $proofCode
 */
class ValidationProofCode extends Shape
{
    /**
     * @param array{proofCode: list<ValidationProofMaterial>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
