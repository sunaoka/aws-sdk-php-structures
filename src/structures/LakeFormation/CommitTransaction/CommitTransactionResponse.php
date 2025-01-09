<?php

namespace Sunaoka\Aws\Structures\LakeFormation\CommitTransaction;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'ACTIVE'|'COMMITTED'|'ABORTED'|'COMMIT_IN_PROGRESS' $TransactionStatus
 */
class CommitTransactionResponse extends Response
{
}
