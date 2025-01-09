<?php

namespace Sunaoka\Aws\Structures\CodePipeline\ListActionExecutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ActionTypeId $actionTypeId
 * @property array<string, string> $configuration
 * @property array<string, string> $resolvedConfiguration
 * @property string $roleArn
 * @property string $region
 * @property list<ArtifactDetail> $inputArtifacts
 * @property string $namespace
 */
class ActionExecutionInput extends Shape
{
    /**
     * @param array{
     *     actionTypeId?: ActionTypeId,
     *     configuration?: array<string, string>,
     *     resolvedConfiguration?: array<string, string>,
     *     roleArn?: string,
     *     region?: string,
     *     inputArtifacts?: list<ArtifactDetail>,
     *     namespace?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
