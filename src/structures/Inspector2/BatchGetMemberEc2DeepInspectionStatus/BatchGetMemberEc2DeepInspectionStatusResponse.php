<?php

namespace Sunaoka\Aws\Structures\Inspector2\BatchGetMemberEc2DeepInspectionStatus;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\MemberAccountEc2DeepInspectionStatusState>|null $accountIds
 * @property list<Shapes\FailedMemberAccountEc2DeepInspectionStatusState>|null $failedAccountIds
 */
class BatchGetMemberEc2DeepInspectionStatusResponse extends Response
{
}
