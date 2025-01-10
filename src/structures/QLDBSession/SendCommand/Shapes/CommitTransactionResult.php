<?php

namespace Sunaoka\Aws\Structures\QLDBSession\SendCommand\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TransactionId
 * @property string|resource|\Psr\Http\Message\StreamInterface $CommitDigest
 * @property TimingInformation $TimingInformation
 * @property IOUsage $ConsumedIOs
 */
class CommitTransactionResult extends Shape
{
    /**
     * @param array{
     *     TransactionId?: string,
     *     CommitDigest?: string|resource|\Psr\Http\Message\StreamInterface,
     *     TimingInformation?: TimingInformation,
     *     ConsumedIOs?: IOUsage
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
