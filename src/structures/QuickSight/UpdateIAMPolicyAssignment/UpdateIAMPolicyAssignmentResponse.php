<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateIAMPolicyAssignment;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $AssignmentName
 * @property string $AssignmentId
 * @property string $PolicyArn
 * @property array<string, list<string>> $Identities
 * @property 'ENABLED'|'DRAFT'|'DISABLED' $AssignmentStatus
 * @property string $RequestId
 * @property int $Status
 */
class UpdateIAMPolicyAssignmentResponse extends Response
{
}
