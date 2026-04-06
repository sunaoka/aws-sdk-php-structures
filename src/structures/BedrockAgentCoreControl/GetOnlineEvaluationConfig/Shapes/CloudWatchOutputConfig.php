<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetOnlineEvaluationConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $logGroupName
 */
class CloudWatchOutputConfig extends Shape
{
    /**
     * @param array{logGroupName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
