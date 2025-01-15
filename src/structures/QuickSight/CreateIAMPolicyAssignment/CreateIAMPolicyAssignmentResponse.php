<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateIAMPolicyAssignment;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $AssignmentName
 * @property string|null $AssignmentId
 * @property 'ENABLED'|'DRAFT'|'DISABLED'|null $AssignmentStatus
 * @property string|null $PolicyArn
 * @property array<string, list<string>>|null $Identities
 * @property string|null $RequestId
 * @property int|null $Status
 */
class CreateIAMPolicyAssignmentResponse extends Response
{
}
