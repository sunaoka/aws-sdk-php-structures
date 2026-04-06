<?php

namespace Sunaoka\Aws\Structures\CodePipeline\CreatePipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property RuleTypeId $ruleTypeId
 * @property array<string, string>|null $configuration
 * @property list<string>|null $commands
 * @property list<InputArtifact>|null $inputArtifacts
 * @property string|null $roleArn
 * @property string|null $region
 * @property int<5, 86400>|null $timeoutInMinutes
 */
class RuleDeclaration extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     ruleTypeId: RuleTypeId,
     *     configuration?: array<string, string>|null,
     *     commands?: list<string>|null,
     *     inputArtifacts?: list<InputArtifact>|null,
     *     roleArn?: string|null,
     *     region?: string|null,
     *     timeoutInMinutes?: int<5, 86400>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
