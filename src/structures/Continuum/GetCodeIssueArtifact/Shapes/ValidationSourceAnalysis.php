<?php

namespace Sunaoka\Aws\Structures\Continuum\GetCodeIssueArtifact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $summary
 * @property 'DATA_LEAKED'|'ERROR_REVEALED'|'BEHAVIOR_CHANGED'|'NO_EFFECT'|null $inferredEffect
 */
class ValidationSourceAnalysis extends Shape
{
    /**
     * @param array{
     *     summary: string,
     *     inferredEffect?: 'DATA_LEAKED'|'ERROR_REVEALED'|'BEHAVIOR_CHANGED'|'NO_EFFECT'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
