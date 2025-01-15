<?php

namespace Sunaoka\Aws\Structures\LakeFormation\StartTransaction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'READ_AND_WRITE'|'READ_ONLY'|null $TransactionType
 */
class StartTransactionRequest extends Request
{
    /**
     * @param array{TransactionType?: 'READ_AND_WRITE'|'READ_ONLY'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
