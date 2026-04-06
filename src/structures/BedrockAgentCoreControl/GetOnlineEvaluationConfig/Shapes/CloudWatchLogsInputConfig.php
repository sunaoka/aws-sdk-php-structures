<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetOnlineEvaluationConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $logGroupNames
 * @property list<string> $serviceNames
 */
class CloudWatchLogsInputConfig extends Shape
{
    /**
     * @param array{
     *     logGroupNames: list<string>,
     *     serviceNames: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
