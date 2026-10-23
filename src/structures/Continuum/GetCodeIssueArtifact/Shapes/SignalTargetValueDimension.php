<?php

namespace Sunaoka\Aws\Structures\Continuum\GetCodeIssueArtifact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'HIGH'|'MEDIUM'|'LOW'|null $value
 * @property 'CODE'|'GRAPH'|'FINDING'|'INFERRED'|'NO_EVIDENCE_DEFAULT'|null $basis
 * @property string|null $reason
 * @property string|null $missingInfo
 */
class SignalTargetValueDimension extends Shape
{
    /**
     * @param array{
     *     value?: 'HIGH'|'MEDIUM'|'LOW'|null,
     *     basis?: 'CODE'|'GRAPH'|'FINDING'|'INFERRED'|'NO_EVIDENCE_DEFAULT'|null,
     *     reason?: string|null,
     *     missingInfo?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
