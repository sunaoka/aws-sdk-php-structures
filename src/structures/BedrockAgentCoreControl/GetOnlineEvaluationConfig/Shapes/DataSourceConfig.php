<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetOnlineEvaluationConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CloudWatchLogsInputConfig|null $cloudWatchLogs
 */
class DataSourceConfig extends Shape
{
    /**
     * @param array{cloudWatchLogs?: CloudWatchLogsInputConfig|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
