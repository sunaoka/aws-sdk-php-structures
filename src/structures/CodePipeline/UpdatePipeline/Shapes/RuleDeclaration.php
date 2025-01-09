<?php

namespace Sunaoka\Aws\Structures\CodePipeline\UpdatePipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property RuleTypeId $ruleTypeId
 * @property array<string, string> $configuration
 * @property list<string> $commands
 * @property list<InputArtifact> $inputArtifacts
 * @property string $roleArn
 * @property string $region
 * @property int $timeoutInMinutes
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
     *     timeoutInMinutes?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
