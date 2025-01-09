<?php

namespace Sunaoka\Aws\Structures\Organizations\DescribeAccount\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $Arn
 * @property string $Email
 * @property string $Name
 * @property 'ACTIVE'|'SUSPENDED'|'PENDING_CLOSURE' $Status
 * @property 'INVITED'|'CREATED' $JoinedMethod
 * @property \Aws\Api\DateTimeResult $JoinedTimestamp
 */
class Account extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     Arn?: string,
     *     Email?: string,
     *     Name?: string,
     *     Status?: 'ACTIVE'|'SUSPENDED'|'PENDING_CLOSURE',
     *     JoinedMethod?: 'INVITED'|'CREATED',
     *     JoinedTimestamp?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
