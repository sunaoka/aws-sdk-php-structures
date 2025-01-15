<?php

namespace Sunaoka\Aws\Structures\LakeFormation\DescribeTransaction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TransactionId
 * @property 'ACTIVE'|'COMMITTED'|'ABORTED'|'COMMIT_IN_PROGRESS'|null $TransactionStatus
 * @property \Aws\Api\DateTimeResult|null $TransactionStartTime
 * @property \Aws\Api\DateTimeResult|null $TransactionEndTime
 */
class TransactionDescription extends Shape
{
    /**
     * @param array{
     *     TransactionId?: string|null,
     *     TransactionStatus?: 'ACTIVE'|'COMMITTED'|'ABORTED'|'COMMIT_IN_PROGRESS'|null,
     *     TransactionStartTime?: \Aws\Api\DateTimeResult|null,
     *     TransactionEndTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
