<?php

namespace Sunaoka\Aws\Structures\Continuum\GetCodeIssueArtifact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $step
 * @property string $claim
 * @property string $source
 * @property double|null $confidence
 */
class ReasoningStep extends Shape
{
    /**
     * @param array{
     *     step: int,
     *     claim: string,
     *     source: string,
     *     confidence?: double|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
