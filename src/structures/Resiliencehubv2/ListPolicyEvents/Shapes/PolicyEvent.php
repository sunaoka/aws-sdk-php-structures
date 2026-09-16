<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\ListPolicyEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $eventId
 * @property \Aws\Api\DateTimeResult $timestamp
 * @property 'POLICY_ATTACHED_TO_SERVICE'|'POLICY_DETACHED_FROM_SERVICE'|'POLICY_SHARING_REVOKED'|'POLICY_DELETED' $eventType
 * @property string $policyArn
 * @property EventActor $actor
 * @property PolicyEventDetails $eventDetails
 */
class PolicyEvent extends Shape
{
    /**
     * @param array{
     *     eventId: string,
     *     timestamp: \Aws\Api\DateTimeResult,
     *     eventType: 'POLICY_ATTACHED_TO_SERVICE'|'POLICY_DETACHED_FROM_SERVICE'|'POLICY_SHARING_REVOKED'|'POLICY_DELETED',
     *     policyArn: string,
     *     actor: EventActor,
     *     eventDetails: PolicyEventDetails
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
