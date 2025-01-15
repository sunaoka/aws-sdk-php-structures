<?php

namespace Sunaoka\Aws\Structures\Macie2\DeleteInvitations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $accountId
 * @property 'ClientError'|'InternalError'|null $errorCode
 * @property string|null $errorMessage
 */
class UnprocessedAccount extends Shape
{
    /**
     * @param array{
     *     accountId?: string|null,
     *     errorCode?: 'ClientError'|'InternalError'|null,
     *     errorMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
