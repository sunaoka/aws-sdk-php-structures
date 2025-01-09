<?php

namespace Sunaoka\Aws\Structures\LakeFormation\CancelTransaction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TransactionId
 */
class CancelTransactionRequest extends Request
{
    /**
     * @param array{TransactionId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
