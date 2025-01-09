<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateRoutingProfileConcurrency\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'VOICE'|'CHAT'|'TASK'|'EMAIL' $Channel
 * @property int $Concurrency
 * @property CrossChannelBehavior $CrossChannelBehavior
 */
class MediaConcurrency extends Shape
{
    /**
     * @param array{
     *     Channel: 'VOICE'|'CHAT'|'TASK'|'EMAIL',
     *     Concurrency: int,
     *     CrossChannelBehavior?: CrossChannelBehavior
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
