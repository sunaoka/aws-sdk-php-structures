<?php

namespace Sunaoka\Aws\Structures\GuardDuty\InviteMembers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AccountId
 * @property string $Result
 */
class UnprocessedAccount extends Shape
{
    /**
     * @param array{
     *     AccountId: string,
     *     Result: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
