<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\GetBatchEvaluation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $sessionIds
 * @property SessionFilterConfig|null $timeRange
 * @property list<SessionTraceIds>|null $sessionTraceIds
 */
class CloudWatchFilterConfig extends Shape
{
    /**
     * @param array{
     *     sessionIds?: list<string>|null,
     *     timeRange?: SessionFilterConfig|null,
     *     sessionTraceIds?: list<SessionTraceIds>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
