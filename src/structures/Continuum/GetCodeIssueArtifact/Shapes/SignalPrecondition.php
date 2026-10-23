<?php

namespace Sunaoka\Aws\Structures\Continuum\GetCodeIssueArtifact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $value
 * @property 'CODE'|'GRAPH'|'FINDING'|'INFERRED'|'NO_EVIDENCE_DEFAULT'|null $basis
 * @property string|null $reason
 * @property string|null $missingInfo
 */
class SignalPrecondition extends Shape
{
    /**
     * @param array{
     *     value?: bool|null,
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
