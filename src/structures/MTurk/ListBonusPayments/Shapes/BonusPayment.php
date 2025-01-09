<?php

namespace Sunaoka\Aws\Structures\MTurk\ListBonusPayments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $WorkerId
 * @property string $BonusAmount
 * @property string $AssignmentId
 * @property string $Reason
 * @property \Aws\Api\DateTimeResult $GrantTime
 */
class BonusPayment extends Shape
{
    /**
     * @param array{
     *     WorkerId?: string,
     *     BonusAmount?: string,
     *     AssignmentId?: string,
     *     Reason?: string,
     *     GrantTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
