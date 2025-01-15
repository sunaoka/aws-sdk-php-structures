<?php

namespace Sunaoka\Aws\Structures\Inspector2\BatchUpdateMemberEc2DeepInspectionStatus;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\MemberAccountEc2DeepInspectionStatusState>|null $accountIds
 * @property list<Shapes\FailedMemberAccountEc2DeepInspectionStatusState>|null $failedAccountIds
 */
class BatchUpdateMemberEc2DeepInspectionStatusResponse extends Response
{
}
