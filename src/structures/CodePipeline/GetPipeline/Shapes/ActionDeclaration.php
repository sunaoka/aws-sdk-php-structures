<?php

namespace Sunaoka\Aws\Structures\CodePipeline\GetPipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property ActionTypeId $actionTypeId
 * @property int<1, 999> $runOrder
 * @property array<string, string> $configuration
 * @property list<string> $commands
 * @property list<OutputArtifact> $outputArtifacts
 * @property list<InputArtifact> $inputArtifacts
 * @property list<string> $outputVariables
 * @property string $roleArn
 * @property string $region
 * @property string $namespace
 * @property int<5, 86400> $timeoutInMinutes
 */
class ActionDeclaration extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     actionTypeId: ActionTypeId,
     *     runOrder?: int<1, 999>,
     *     configuration?: array<string, string>,
     *     commands?: list<string>,
     *     outputArtifacts?: list<OutputArtifact>,
     *     inputArtifacts?: list<InputArtifact>,
     *     outputVariables?: list<string>,
     *     roleArn?: string,
     *     region?: string,
     *     namespace?: string,
     *     timeoutInMinutes?: int<5, 86400>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
