<?php

namespace Sunaoka\Aws\Structures\LakeFormation\ListTransactions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TransactionId
 * @property 'ACTIVE'|'COMMITTED'|'ABORTED'|'COMMIT_IN_PROGRESS' $TransactionStatus
 * @property \Aws\Api\DateTimeResult $TransactionStartTime
 * @property \Aws\Api\DateTimeResult $TransactionEndTime
 */
class TransactionDescription extends Shape
{
    /**
     * @param array{
     *     TransactionId?: string,
     *     TransactionStatus?: 'ACTIVE'|'COMMITTED'|'ABORTED'|'COMMIT_IN_PROGRESS',
     *     TransactionStartTime?: \Aws\Api\DateTimeResult,
     *     TransactionEndTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
