<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateOnlineEvaluationConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $onlineEvaluationConfigName
 * @property string|null $description
 * @property Shapes\Rule $rule
 * @property Shapes\DataSourceConfig $dataSourceConfig
 * @property list<Shapes\EvaluatorReference> $evaluators
 * @property string $evaluationExecutionRoleArn
 * @property bool $enableOnCreate
 * @property array<string, string>|null $tags
 */
class CreateOnlineEvaluationConfigRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     onlineEvaluationConfigName: string,
     *     description?: string|null,
     *     rule: Shapes\Rule,
     *     dataSourceConfig: Shapes\DataSourceConfig,
     *     evaluators: list<Shapes\EvaluatorReference>,
     *     evaluationExecutionRoleArn: string,
     *     enableOnCreate: bool,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
