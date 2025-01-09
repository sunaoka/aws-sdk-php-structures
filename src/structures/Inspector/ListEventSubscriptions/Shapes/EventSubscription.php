<?php

namespace Sunaoka\Aws\Structures\Inspector\ListEventSubscriptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ASSESSMENT_RUN_STARTED'|'ASSESSMENT_RUN_COMPLETED'|'ASSESSMENT_RUN_STATE_CHANGED'|'FINDING_REPORTED'|'OTHER' $event
 * @property \Aws\Api\DateTimeResult $subscribedAt
 */
class EventSubscription extends Shape
{
    /**
     * @param array{
     *     event: 'ASSESSMENT_RUN_STARTED'|'ASSESSMENT_RUN_COMPLETED'|'ASSESSMENT_RUN_STATE_CHANGED'|'FINDING_REPORTED'|'OTHER',
     *     subscribedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
