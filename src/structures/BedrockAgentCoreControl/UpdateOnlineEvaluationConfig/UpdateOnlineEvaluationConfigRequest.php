<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateOnlineEvaluationConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $onlineEvaluationConfigId
 * @property string|null $description
 * @property Shapes\Rule|null $rule
 * @property Shapes\DataSourceConfig|null $dataSourceConfig
 * @property list<Shapes\EvaluatorReference>|null $evaluators
 * @property string|null $evaluationExecutionRoleArn
 * @property 'ENABLED'|'DISABLED'|null $executionStatus
 */
class UpdateOnlineEvaluationConfigRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     onlineEvaluationConfigId: string,
     *     description?: string|null,
     *     rule?: Shapes\Rule|null,
     *     dataSourceConfig?: Shapes\DataSourceConfig|null,
     *     evaluators?: list<Shapes\EvaluatorReference>|null,
     *     evaluationExecutionRoleArn?: string|null,
     *     executionStatus?: 'ENABLED'|'DISABLED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
