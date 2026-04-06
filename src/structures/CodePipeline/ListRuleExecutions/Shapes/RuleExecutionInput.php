<?php

namespace Sunaoka\Aws\Structures\CodePipeline\ListRuleExecutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RuleTypeId|null $ruleTypeId
 * @property array<string, string>|null $configuration
 * @property array<string, string>|null $resolvedConfiguration
 * @property string|null $roleArn
 * @property string|null $region
 * @property list<ArtifactDetail>|null $inputArtifacts
 */
class RuleExecutionInput extends Shape
{
    /**
     * @param array{
     *     ruleTypeId?: RuleTypeId|null,
     *     configuration?: array<string, string>|null,
     *     resolvedConfiguration?: array<string, string>|null,
     *     roleArn?: string|null,
     *     region?: string|null,
     *     inputArtifacts?: list<ArtifactDetail>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
