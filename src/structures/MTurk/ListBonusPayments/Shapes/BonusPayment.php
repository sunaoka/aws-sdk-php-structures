<?php

namespace Sunaoka\Aws\Structures\MTurk\ListBonusPayments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $WorkerId
 * @property string|null $BonusAmount
 * @property string|null $AssignmentId
 * @property string|null $Reason
 * @property \Aws\Api\DateTimeResult|null $GrantTime
 */
class BonusPayment extends Shape
{
    /**
     * @param array{
     *     WorkerId?: string|null,
     *     BonusAmount?: string|null,
     *     AssignmentId?: string|null,
     *     Reason?: string|null,
     *     GrantTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
