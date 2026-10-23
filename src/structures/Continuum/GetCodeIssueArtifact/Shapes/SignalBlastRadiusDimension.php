<?php

namespace Sunaoka\Aws\Structures\Continuum\GetCodeIssueArtifact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CROSS_TENANT'|'OTHER_USERS_IN_TENANT'|'OWN_SCOPE'|null $value
 * @property 'CODE'|'GRAPH'|'FINDING'|'INFERRED'|'NO_EVIDENCE_DEFAULT'|null $basis
 * @property string|null $reason
 * @property string|null $missingInfo
 */
class SignalBlastRadiusDimension extends Shape
{
    /**
     * @param array{
     *     value?: 'CROSS_TENANT'|'OTHER_USERS_IN_TENANT'|'OWN_SCOPE'|null,
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
