<?php

namespace Sunaoka\Aws\Structures\FreeTier\ListAccountActivities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $activityId
 * @property string $title
 * @property ActivityReward $reward
 * @property 'NOT_STARTED'|'IN_PROGRESS'|'COMPLETED'|'EXPIRING' $status
 */
class ActivitySummary extends Shape
{
    /**
     * @param array{
     *     activityId: string,
     *     title: string,
     *     reward: ActivityReward,
     *     status: 'NOT_STARTED'|'IN_PROGRESS'|'COMPLETED'|'EXPIRING'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
