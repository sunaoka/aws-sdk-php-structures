<?php

namespace Sunaoka\Aws\Structures\Detective\DeleteMembers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AccountId
 * @property string|null $Reason
 */
class UnprocessedAccount extends Shape
{
    /**
     * @param array{
     *     AccountId?: string|null,
     *     Reason?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
