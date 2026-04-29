<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\GetBatchEvaluation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $sessionIds
 * @property SessionFilterConfig|null $timeRange
 */
class CloudWatchFilterConfig extends Shape
{
    /**
     * @param array{
     *     sessionIds?: list<string>|null,
     *     timeRange?: SessionFilterConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
