<?php

namespace Sunaoka\Aws\Structures\Inspector\SubscribeToEvent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $resourceArn
 * @property 'ASSESSMENT_RUN_STARTED'|'ASSESSMENT_RUN_COMPLETED'|'ASSESSMENT_RUN_STATE_CHANGED'|'FINDING_REPORTED'|'OTHER' $event
 * @property string $topicArn
 */
class SubscribeToEventRequest extends Request
{
    /**
     * @param array{
     *     resourceArn: string,
     *     event: 'ASSESSMENT_RUN_STARTED'|'ASSESSMENT_RUN_COMPLETED'|'ASSESSMENT_RUN_STATE_CHANGED'|'FINDING_REPORTED'|'OTHER',
     *     topicArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
