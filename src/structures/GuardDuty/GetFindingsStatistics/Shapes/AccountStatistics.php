<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindingsStatistics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AccountId
 * @property \Aws\Api\DateTimeResult $LastGeneratedAt
 * @property int $TotalFindings
 */
class AccountStatistics extends Shape
{
    /**
     * @param array{
     *     AccountId?: string,
     *     LastGeneratedAt?: \Aws\Api\DateTimeResult,
     *     TotalFindings?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
