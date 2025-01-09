<?php

namespace Sunaoka\Aws\Structures\Macie2\DeclineInvitations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $accountId
 * @property 'ClientError'|'InternalError' $errorCode
 * @property string $errorMessage
 */
class UnprocessedAccount extends Shape
{
    /**
     * @param array{
     *     accountId?: string,
     *     errorCode?: 'ClientError'|'InternalError',
     *     errorMessage?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
