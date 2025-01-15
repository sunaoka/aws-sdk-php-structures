<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateIAMPolicyAssignment;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $AssignmentName
 * @property string|null $AssignmentId
 * @property string|null $PolicyArn
 * @property array<string, list<string>>|null $Identities
 * @property 'ENABLED'|'DRAFT'|'DISABLED'|null $AssignmentStatus
 * @property string|null $RequestId
 * @property int|null $Status
 */
class UpdateIAMPolicyAssignmentResponse extends Response
{
}
