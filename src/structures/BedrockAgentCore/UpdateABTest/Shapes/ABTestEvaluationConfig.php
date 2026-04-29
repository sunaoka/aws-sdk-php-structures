<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\UpdateABTest\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $onlineEvaluationConfigArn
 * @property list<PerVariantOnlineEvaluationConfig>|null $perVariantOnlineEvaluationConfig
 */
class ABTestEvaluationConfig extends Shape
{
    /**
     * @param array{
     *     onlineEvaluationConfigArn?: string|null,
     *     perVariantOnlineEvaluationConfig?: list<PerVariantOnlineEvaluationConfig>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
