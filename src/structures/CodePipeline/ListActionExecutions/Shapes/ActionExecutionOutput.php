<?php

namespace Sunaoka\Aws\Structures\CodePipeline\ListActionExecutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ArtifactDetail>|null $outputArtifacts
 * @property ActionExecutionResult|null $executionResult
 * @property array<string, string>|null $outputVariables
 */
class ActionExecutionOutput extends Shape
{
    /**
     * @param array{
     *     outputArtifacts?: list<ArtifactDetail>|null,
     *     executionResult?: ActionExecutionResult|null,
     *     outputVariables?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
