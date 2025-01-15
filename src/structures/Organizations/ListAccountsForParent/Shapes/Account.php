<?php

namespace Sunaoka\Aws\Structures\Organizations\ListAccountsForParent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property string|null $Arn
 * @property string|null $Email
 * @property string|null $Name
 * @property 'ACTIVE'|'SUSPENDED'|'PENDING_CLOSURE'|null $Status
 * @property 'INVITED'|'CREATED'|null $JoinedMethod
 * @property \Aws\Api\DateTimeResult|null $JoinedTimestamp
 */
class Account extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     Arn?: string|null,
     *     Email?: string|null,
     *     Name?: string|null,
     *     Status?: 'ACTIVE'|'SUSPENDED'|'PENDING_CLOSURE'|null,
     *     JoinedMethod?: 'INVITED'|'CREATED'|null,
     *     JoinedTimestamp?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
