<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeRoutingProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'VOICE'|'CHAT'|'TASK' $Channel
 * @property int<1, 10> $Concurrency
 * @property CrossChannelBehavior|null $CrossChannelBehavior
 */
class MediaConcurrency extends Shape
{
    /**
     * @param array{
     *     Channel: 'VOICE'|'CHAT'|'TASK',
     *     Concurrency: int<1, 10>,
     *     CrossChannelBehavior?: CrossChannelBehavior|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
