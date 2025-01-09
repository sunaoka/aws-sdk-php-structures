<?php

namespace Sunaoka\Aws\Structures\MTurk\SendTestEventNotification\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Destination
 * @property 'Email'|'SQS'|'SNS' $Transport
 * @property string $Version
 * @property list<'AssignmentAccepted'|'AssignmentAbandoned'|'AssignmentReturned'|'AssignmentSubmitted'|'AssignmentRejected'|'AssignmentApproved'|'HITCreated'|'HITExpired'|'HITReviewable'|'HITExtended'|'HITDisposed'|'Ping'> $EventTypes
 */
class NotificationSpecification extends Shape
{
    /**
     * @param array{
     *     Destination: string,
     *     Transport: 'Email'|'SQS'|'SNS',
     *     Version: string,
     *     EventTypes: list<'AssignmentAccepted'|'AssignmentAbandoned'|'AssignmentReturned'|'AssignmentSubmitted'|'AssignmentRejected'|'AssignmentApproved'|'HITCreated'|'HITExpired'|'HITReviewable'|'HITExtended'|'HITDisposed'|'Ping'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
