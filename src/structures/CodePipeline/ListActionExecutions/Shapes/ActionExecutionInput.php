<?php

namespace Sunaoka\Aws\Structures\CodePipeline\ListActionExecutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ActionTypeId|null $actionTypeId
 * @property array<string, string>|null $configuration
 * @property array<string, string>|null $resolvedConfiguration
 * @property string|null $roleArn
 * @property string|null $region
 * @property list<ArtifactDetail>|null $inputArtifacts
 * @property string|null $namespace
 */
class ActionExecutionInput extends Shape
{
    /**
     * @param array{
     *     actionTypeId?: ActionTypeId|null,
     *     configuration?: array<string, string>|null,
     *     resolvedConfiguration?: array<string, string>|null,
     *     roleArn?: string|null,
     *     region?: string|null,
     *     inputArtifacts?: list<ArtifactDetail>|null,
     *     namespace?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
