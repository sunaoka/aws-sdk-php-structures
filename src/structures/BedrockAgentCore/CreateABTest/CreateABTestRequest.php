<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\CreateABTest;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string|null $description
 * @property string $gatewayArn
 * @property list<Shapes\Variant> $variants
 * @property Shapes\GatewayFilter|null $gatewayFilter
 * @property Shapes\ABTestEvaluationConfig $evaluationConfig
 * @property string $roleArn
 * @property bool|null $enableOnCreate
 * @property string|null $clientToken
 */
class CreateABTestRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     description?: string|null,
     *     gatewayArn: string,
     *     variants: list<Shapes\Variant>,
     *     gatewayFilter?: Shapes\GatewayFilter|null,
     *     evaluationConfig: Shapes\ABTestEvaluationConfig,
     *     roleArn: string,
     *     enableOnCreate?: bool|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
