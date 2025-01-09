<?php

namespace Sunaoka\Aws\Structures\CodePipeline\ListRuleExecutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RuleTypeId $ruleTypeId
 * @property array<string, string> $configuration
 * @property array<string, string> $resolvedConfiguration
 * @property string $roleArn
 * @property string $region
 * @property list<ArtifactDetail> $inputArtifacts
 */
class RuleExecutionInput extends Shape
{
    /**
     * @param array{
     *     ruleTypeId?: RuleTypeId,
     *     configuration?: array<string, string>,
     *     resolvedConfiguration?: array<string, string>,
     *     roleArn?: string,
     *     region?: string,
     *     inputArtifacts?: list<ArtifactDetail>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
