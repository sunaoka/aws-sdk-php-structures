<?php

namespace Sunaoka\Aws\Structures\QLDBSession\SendCommand\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TransactionId
 * @property string|resource|\Psr\Http\Message\StreamInterface|null $CommitDigest
 * @property TimingInformation|null $TimingInformation
 * @property IOUsage|null $ConsumedIOs
 */
class CommitTransactionResult extends Shape
{
    /**
     * @param array{
     *     TransactionId?: string|null,
     *     CommitDigest?: string|resource|\Psr\Http\Message\StreamInterface|null,
     *     TimingInformation?: TimingInformation|null,
     *     ConsumedIOs?: IOUsage|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
