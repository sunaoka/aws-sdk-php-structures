<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\UpdateABTest;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $abTestId
 * @property string|null $clientToken
 * @property string|null $name
 * @property string|null $description
 * @property list<Shapes\Variant>|null $variants
 * @property Shapes\GatewayFilter|null $gatewayFilter
 * @property Shapes\ABTestEvaluationConfig|null $evaluationConfig
 * @property string|null $roleArn
 * @property 'PAUSED'|'RUNNING'|'STOPPED'|'NOT_STARTED'|null $executionStatus
 */
class UpdateABTestRequest extends Request
{
    /**
     * @param array{
     *     abTestId: string,
     *     clientToken?: string|null,
     *     name?: string|null,
     *     description?: string|null,
     *     variants?: list<Shapes\Variant>|null,
     *     gatewayFilter?: Shapes\GatewayFilter|null,
     *     evaluationConfig?: Shapes\ABTestEvaluationConfig|null,
     *     roleArn?: string|null,
     *     executionStatus?: 'PAUSED'|'RUNNING'|'STOPPED'|'NOT_STARTED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
