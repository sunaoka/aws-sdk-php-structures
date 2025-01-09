<?php

namespace Sunaoka\Aws\Structures\CodePipeline\GetPipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property RuleTypeId $ruleTypeId
 * @property array<string, string> $configuration
 * @property list<string> $commands
 * @property list<InputArtifact> $inputArtifacts
 * @property string $roleArn
 * @property string $region
 * @property int<5, 86400> $timeoutInMinutes
 */
class RuleDeclaration extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     ruleTypeId: RuleTypeId,
     *     configuration?: array<string, string>,
     *     commands?: list<string>,
     *     inputArtifacts?: list<InputArtifact>,
     *     roleArn?: string,
     *     region?: string,
     *     timeoutInMinutes?: int<5, 86400>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
