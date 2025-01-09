<?php

namespace Sunaoka\Aws\Structures\QLDBSession\SendCommand\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TransactionId
 * @property string $CommitDigest
 */
class CommitTransactionRequest extends Shape
{
    /**
     * @param array{
     *     TransactionId: string,
     *     CommitDigest: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
