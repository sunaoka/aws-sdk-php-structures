<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\Evaluate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $evaluatorArn
 * @property string $evaluatorId
 * @property string $evaluatorName
 * @property string|null $explanation
 * @property Context $context
 * @property double|null $value
 * @property string|null $label
 * @property TokenUsage|null $tokenUsage
 * @property string|null $errorMessage
 * @property string|null $errorCode
 */
class EvaluationResultContent extends Shape
{
    /**
     * @param array{
     *     evaluatorArn: string,
     *     evaluatorId: string,
     *     evaluatorName: string,
     *     explanation?: string|null,
     *     context: Context,
     *     value?: double|null,
     *     label?: string|null,
     *     tokenUsage?: TokenUsage|null,
     *     errorMessage?: string|null,
     *     errorCode?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
