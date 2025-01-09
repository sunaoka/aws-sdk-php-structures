<?php

namespace Sunaoka\Aws\Structures\MTurk\SendTestEventNotification;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\NotificationSpecification $Notification
 * @property 'AssignmentAccepted'|'AssignmentAbandoned'|'AssignmentReturned'|'AssignmentSubmitted'|'AssignmentRejected'|'AssignmentApproved'|'HITCreated'|'HITExpired'|'HITReviewable'|'HITExtended'|'HITDisposed'|'Ping' $TestEventType
 */
class SendTestEventNotificationRequest extends Request
{
    /**
     * @param array{
     *     Notification: Shapes\NotificationSpecification,
     *     TestEventType: 'AssignmentAccepted'|'AssignmentAbandoned'|'AssignmentReturned'|'AssignmentSubmitted'|'AssignmentRejected'|'AssignmentApproved'|'HITCreated'|'HITExpired'|'HITReviewable'|'HITExtended'|'HITDisposed'|'Ping'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
