<?php

namespace Sunaoka\Aws\Structures\Kinesis\UpdateAccountSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED'|'ENABLED_UNTIL_EARLIEST_ALLOWED_END' $Status
 * @property \Aws\Api\DateTimeResult|null $StartedAt
 * @property \Aws\Api\DateTimeResult|null $EndedAt
 * @property \Aws\Api\DateTimeResult|null $EarliestAllowedEndAt
 */
class MinimumThroughputBillingCommitmentOutput extends Shape
{
    /**
     * @param array{
     *     Status: 'ENABLED'|'DISABLED'|'ENABLED_UNTIL_EARLIEST_ALLOWED_END',
     *     StartedAt?: \Aws\Api\DateTimeResult|null,
     *     EndedAt?: \Aws\Api\DateTimeResult|null,
     *     EarliestAllowedEndAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
