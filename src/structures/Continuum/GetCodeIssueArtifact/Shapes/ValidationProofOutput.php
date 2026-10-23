<?php

namespace Sunaoka\Aws\Structures\Continuum\GetCodeIssueArtifact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $consoleOutput
 */
class ValidationProofOutput extends Shape
{
    /**
     * @param array{consoleOutput: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
