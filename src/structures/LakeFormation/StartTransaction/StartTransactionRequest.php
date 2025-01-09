<?php

namespace Sunaoka\Aws\Structures\LakeFormation\StartTransaction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'READ_AND_WRITE'|'READ_ONLY' $TransactionType
 */
class StartTransactionRequest extends Request
{
    /**
     * @param array{TransactionType?: 'READ_AND_WRITE'|'READ_ONLY'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
