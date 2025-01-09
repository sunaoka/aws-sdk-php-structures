<?php

namespace Sunaoka\Aws\Structures\LakeFormation\CommitTransaction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TransactionId
 */
class CommitTransactionRequest extends Request
{
    /**
     * @param array{TransactionId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
