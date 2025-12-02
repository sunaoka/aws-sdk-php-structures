<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SessionArn
 * @property list<AiAgentInfo>|null $AiAgents
 */
class WisdomInfo extends Shape
{
    /**
     * @param array{
     *     SessionArn?: string|null,
     *     AiAgents?: list<AiAgentInfo>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
