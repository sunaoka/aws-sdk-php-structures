<?php

namespace Sunaoka\Aws\Structures\Inspector2\BatchGetMemberEc2DeepInspectionStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $accountIds
 */
class BatchGetMemberEc2DeepInspectionStatusRequest extends Request
{
    /**
     * @param array{accountIds?: list<string>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
