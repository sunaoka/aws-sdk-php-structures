<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ChatContactMetrics|null $ChatContactMetrics
 * @property ParticipantMetrics|null $AgentMetrics
 * @property ParticipantMetrics|null $CustomerMetrics
 */
class ChatMetrics extends Shape
{
    /**
     * @param array{
     *     ChatContactMetrics?: ChatContactMetrics|null,
     *     AgentMetrics?: ParticipantMetrics|null,
     *     CustomerMetrics?: ParticipantMetrics|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
