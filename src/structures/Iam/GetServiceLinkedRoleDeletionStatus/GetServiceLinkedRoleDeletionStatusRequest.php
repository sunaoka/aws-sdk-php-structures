<?php

namespace Sunaoka\Aws\Structures\Iam\GetServiceLinkedRoleDeletionStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DeletionTaskId
 */
class GetServiceLinkedRoleDeletionStatusRequest extends Request
{
    /**
     * @param array{DeletionTaskId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
