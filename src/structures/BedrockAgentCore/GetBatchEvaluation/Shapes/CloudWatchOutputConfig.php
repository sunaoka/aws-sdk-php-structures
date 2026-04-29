<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\GetBatchEvaluation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $logGroupName
 * @property string $logStreamName
 */
class CloudWatchOutputConfig extends Shape
{
    /**
     * @param array{
     *     logGroupName: string,
     *     logStreamName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
