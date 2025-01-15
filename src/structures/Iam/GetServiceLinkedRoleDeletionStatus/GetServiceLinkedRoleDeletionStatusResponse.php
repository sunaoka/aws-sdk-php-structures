<?php

namespace Sunaoka\Aws\Structures\Iam\GetServiceLinkedRoleDeletionStatus;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'SUCCEEDED'|'IN_PROGRESS'|'FAILED'|'NOT_STARTED' $Status
 * @property Shapes\DeletionTaskFailureReasonType|null $Reason
 */
class GetServiceLinkedRoleDeletionStatusResponse extends Response
{
}
