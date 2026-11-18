<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\StartDatasetGeneration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $onlineEvaluationConfigArn
 * @property \Aws\Api\DateTimeResult|null $startTime
 * @property \Aws\Api\DateTimeResult|null $endTime
 */
class OnlineEvaluationSourceConfig extends Shape
{
    /**
     * @param array{
     *     onlineEvaluationConfigArn: string,
     *     startTime?: \Aws\Api\DateTimeResult|null,
     *     endTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
