<?php

namespace Sunaoka\Aws\Structures\CodePipeline\ListActionExecutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ArtifactDetail> $outputArtifacts
 * @property ActionExecutionResult $executionResult
 * @property array<string, string> $outputVariables
 */
class ActionExecutionOutput extends Shape
{
    /**
     * @param array{
     *     outputArtifacts?: list<ArtifactDetail>,
     *     executionResult?: ActionExecutionResult,
     *     outputVariables?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
