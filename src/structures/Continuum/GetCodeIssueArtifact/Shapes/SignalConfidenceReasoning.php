<?php

namespace Sunaoka\Aws\Structures\Continuum\GetCodeIssueArtifact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $summary
 * @property list<string>|null $factors
 */
class SignalConfidenceReasoning extends Shape
{
    /**
     * @param array{
     *     summary: string,
     *     factors?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
