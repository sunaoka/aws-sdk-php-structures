<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\StartBatchEvaluation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $onlineEvaluationConfigArn
 * @property SessionFilterConfig|null $sessionFilterConfig
 */
class OnlineEvaluationConfigSource extends Shape
{
    /**
     * @param array{
     *     onlineEvaluationConfigArn: string,
     *     sessionFilterConfig?: SessionFilterConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
