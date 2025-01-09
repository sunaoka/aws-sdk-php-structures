<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateIAMPolicyAssignment;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $AssignmentName
 * @property string $AssignmentId
 * @property 'ENABLED'|'DRAFT'|'DISABLED' $AssignmentStatus
 * @property string $PolicyArn
 * @property array<string, list<string>> $Identities
 * @property string $RequestId
 * @property int $Status
 */
class CreateIAMPolicyAssignmentResponse extends Response
{
}
