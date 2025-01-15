<?php

namespace Sunaoka\Aws\Structures\Inspector2\BatchGetAccountStatus;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\AccountState> $accounts
 * @property list<Shapes\FailedAccount>|null $failedAccounts
 */
class BatchGetAccountStatusResponse extends Response
{
}
