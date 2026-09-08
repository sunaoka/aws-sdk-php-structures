<?php

namespace Sunaoka\Aws\Structures\Connect\CreateRoutingProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'VOICE'|'CHAT'|'TASK'|'EMAIL' $Channel
 * @property int<0, 10>|null $Concurrency
 * @property CrossChannelBehavior|null $CrossChannelBehavior
 * @property list<WorkloadTypeConcurrency>|null $WorkloadTypeConcurrencies
 */
class MediaConcurrency extends Shape
{
    /**
     * @param array{
     *     Channel: 'VOICE'|'CHAT'|'TASK'|'EMAIL',
     *     Concurrency?: int<0, 10>|null,
     *     CrossChannelBehavior?: CrossChannelBehavior|null,
     *     WorkloadTypeConcurrencies?: list<WorkloadTypeConcurrency>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
