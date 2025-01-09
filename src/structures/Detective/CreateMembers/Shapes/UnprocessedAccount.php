<?php

namespace Sunaoka\Aws\Structures\Detective\CreateMembers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AccountId
 * @property string $Reason
 */
class UnprocessedAccount extends Shape
{
    /**
     * @param array{
     *     AccountId?: string,
     *     Reason?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
