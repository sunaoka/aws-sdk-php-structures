<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\GetRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<CloudWatchLogsFilter>|null $filters
 */
class CloudWatchLogsRule extends Shape
{
    /**
     * @param array{filters?: list<CloudWatchLogsFilter>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
