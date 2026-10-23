<?php

namespace Sunaoka\Aws\Structures\Continuum\ListCodeIssueArtifacts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $agent
 */
class IssueArtifactProducerSummary extends Shape
{
    /**
     * @param array{agent: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
