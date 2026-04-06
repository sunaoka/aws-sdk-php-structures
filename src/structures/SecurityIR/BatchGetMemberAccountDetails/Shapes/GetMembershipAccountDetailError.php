<?php

namespace Sunaoka\Aws\Structures\SecurityIR\BatchGetMemberAccountDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $accountId
 * @property string $error
 * @property string $message
 */
class GetMembershipAccountDetailError extends Shape
{
    /**
     * @param array{
     *     accountId: string,
     *     error: string,
     *     message: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
