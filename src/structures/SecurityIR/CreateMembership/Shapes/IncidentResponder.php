<?php

namespace Sunaoka\Aws\Structures\SecurityIR\CreateMembership\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $jobTitle
 * @property string $email
 * @property list<'Case Created'|'Case Updated'|'Case Acknowledged'|'Case Closed'|'Case Updated To Service Managed'|'Case Status Updated'|'Case Pending Customer Action Reminder'|'Case Attachment Url Uploaded'|'Case Comment Added'|'Case Comment Updated'|'Membership Created'|'Membership Updated'|'Membership Cancelled'|'Register Delegated Administrator'|'Deregister Delegated Administrator'|'Disable AWS Service Access'>|null $communicationPreferences
 */
class IncidentResponder extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     jobTitle: string,
     *     email: string,
     *     communicationPreferences?: list<'Case Created'|'Case Updated'|'Case Acknowledged'|'Case Closed'|'Case Updated To Service Managed'|'Case Status Updated'|'Case Pending Customer Action Reminder'|'Case Attachment Url Uploaded'|'Case Comment Added'|'Case Comment Updated'|'Membership Created'|'Membership Updated'|'Membership Cancelled'|'Register Delegated Administrator'|'Deregister Delegated Administrator'|'Disable AWS Service Access'>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
