<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateOnlineEvaluationConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $logGroupName
 * @property string|null $metricsNamespace
 * @property 'DEDICATED_LOG_GROUP'|'SOURCE_LOG_GROUP'|null $resultDestination
 */
class CloudWatchOutputConfig extends Shape
{
    /**
     * @param array{
     *     logGroupName?: string|null,
     *     metricsNamespace?: string|null,
     *     resultDestination?: 'DEDICATED_LOG_GROUP'|'SOURCE_LOG_GROUP'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
