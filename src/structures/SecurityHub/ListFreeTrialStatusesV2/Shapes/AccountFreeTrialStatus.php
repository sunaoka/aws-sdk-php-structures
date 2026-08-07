<?php

namespace Sunaoka\Aws\Structures\SecurityHub\ListFreeTrialStatusesV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AccountId
 * @property \Aws\Api\DateTimeResult $EvaluatedAt
 * @property list<FreeTrialStatus> $FreeTrialStatuses
 */
class AccountFreeTrialStatus extends Shape
{
    /**
     * @param array{
     *     AccountId: string,
     *     EvaluatedAt: \Aws\Api\DateTimeResult,
     *     FreeTrialStatuses: list<FreeTrialStatus>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
