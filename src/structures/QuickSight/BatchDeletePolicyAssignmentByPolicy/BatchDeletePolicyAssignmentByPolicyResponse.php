<?php

namespace Sunaoka\Aws\Structures\QuickSight\BatchDeletePolicyAssignmentByPolicy;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $PolicyArn
 * @property list<Shapes\BatchDeletePolicyAssignmentSuccess> $Success
 * @property list<Shapes\BatchDeletePolicyAssignmentError> $Errors
 */
class BatchDeletePolicyAssignmentByPolicyResponse extends Response
{
}
