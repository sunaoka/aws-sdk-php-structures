<?php

namespace Sunaoka\Aws\Structures\CodePipeline\UpdatePipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property ActionTypeId $actionTypeId
 * @property int<1, 999>|null $runOrder
 * @property array<string, string>|null $configuration
 * @property list<string>|null $commands
 * @property list<OutputArtifact>|null $outputArtifacts
 * @property list<InputArtifact>|null $inputArtifacts
 * @property list<string>|null $outputVariables
 * @property string|null $roleArn
 * @property string|null $region
 * @property string|null $namespace
 * @property int<5, 86400>|null $timeoutInMinutes
 * @property list<EnvironmentVariable>|null $environmentVariables
 */
class ActionDeclaration extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     actionTypeId: ActionTypeId,
     *     runOrder?: int<1, 999>|null,
     *     configuration?: array<string, string>|null,
     *     commands?: list<string>|null,
     *     outputArtifacts?: list<OutputArtifact>|null,
     *     inputArtifacts?: list<InputArtifact>|null,
     *     outputVariables?: list<string>|null,
     *     roleArn?: string|null,
     *     region?: string|null,
     *     namespace?: string|null,
     *     timeoutInMinutes?: int<5, 86400>|null,
     *     environmentVariables?: list<EnvironmentVariable>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
