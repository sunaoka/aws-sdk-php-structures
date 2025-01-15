<?php

namespace Sunaoka\Aws\Structures\LakeFormation\ExtendTransaction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $TransactionId
 */
class ExtendTransactionRequest extends Request
{
    /**
     * @param array{TransactionId?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
