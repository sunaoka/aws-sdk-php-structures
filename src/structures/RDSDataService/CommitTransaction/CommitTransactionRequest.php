<?php

namespace Sunaoka\Aws\Structures\RDSDataService\CommitTransaction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $resourceArn
 * @property string $secretArn
 * @property string $transactionId
 */
class CommitTransactionRequest extends Request
{
    /**
     * @param array{
     *     resourceArn: string,
     *     secretArn: string,
     *     transactionId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
