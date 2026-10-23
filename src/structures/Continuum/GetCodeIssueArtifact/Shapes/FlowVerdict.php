<?php

namespace Sunaoka\Aws\Structures\Continuum\GetCodeIssueArtifact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $flowId
 * @property 'CONFIRMED'|'DENIED'|'INCONCLUSIVE' $verdict
 * @property double|null $confidence
 * @property list<string>|null $evidence
 */
class FlowVerdict extends Shape
{
    /**
     * @param array{
     *     flowId: string,
     *     verdict: 'CONFIRMED'|'DENIED'|'INCONCLUSIVE',
     *     confidence?: double|null,
     *     evidence?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
