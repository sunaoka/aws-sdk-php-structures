<?php

namespace Sunaoka\Aws\Structures\LakeFormation\DescribeTransaction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TransactionId
 */
class DescribeTransactionRequest extends Request
{
    /**
     * @param array{TransactionId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
