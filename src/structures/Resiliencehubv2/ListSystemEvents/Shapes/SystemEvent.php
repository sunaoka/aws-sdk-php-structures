<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\ListSystemEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $eventId
 * @property \Aws\Api\DateTimeResult $timestamp
 * @property 'SYSTEM_CREATED'|'SYSTEM_DELETED'|'SYSTEM_USER_JOURNEY_CREATED'|'SYSTEM_USER_JOURNEY_UPDATED'|'SYSTEM_USER_JOURNEY_DELETED'|'SYSTEM_SERVICE_ASSOCIATED'|'SYSTEM_SERVICE_DISASSOCIATED'|'SYSTEM_POLICY_ASSOCIATED'|'SYSTEM_POLICY_DISASSOCIATED' $eventType
 * @property string $systemArn
 * @property EventActor $actor
 * @property SystemEventDetails $eventDetails
 */
class SystemEvent extends Shape
{
    /**
     * @param array{
     *     eventId: string,
     *     timestamp: \Aws\Api\DateTimeResult,
     *     eventType: 'SYSTEM_CREATED'|'SYSTEM_DELETED'|'SYSTEM_USER_JOURNEY_CREATED'|'SYSTEM_USER_JOURNEY_UPDATED'|'SYSTEM_USER_JOURNEY_DELETED'|'SYSTEM_SERVICE_ASSOCIATED'|'SYSTEM_SERVICE_DISASSOCIATED'|'SYSTEM_POLICY_ASSOCIATED'|'SYSTEM_POLICY_DISASSOCIATED',
     *     systemArn: string,
     *     actor: EventActor,
     *     eventDetails: SystemEventDetails
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
