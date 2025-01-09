<?php

namespace Sunaoka\Aws\Structures\Inspector2\BatchUpdateMemberEc2DeepInspectionStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\MemberAccountEc2DeepInspectionStatus> $accountIds
 */
class BatchUpdateMemberEc2DeepInspectionStatusRequest extends Request
{
    /**
     * @param array{accountIds: list<Shapes\MemberAccountEc2DeepInspectionStatus>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
