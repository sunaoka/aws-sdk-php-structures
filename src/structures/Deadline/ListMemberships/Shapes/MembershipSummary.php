<?php

namespace Sunaoka\Aws\Structures\Deadline\ListMemberships\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FarmMember|null $farm
 * @property QueueMember|null $queue
 * @property FleetMember|null $fleet
 * @property JobMember|null $job
 */
class MembershipSummary extends Shape
{
    /**
     * @param array{
     *     farm?: FarmMember|null,
     *     queue?: QueueMember|null,
     *     fleet?: FleetMember|null,
     *     job?: JobMember|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
