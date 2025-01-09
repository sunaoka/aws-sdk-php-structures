<?php

namespace Sunaoka\Aws\Structures\CodeCatalyst\ListEventLogs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'USER'|'AWS_ACCOUNT'|'UNKNOWN' $userType
 * @property string $principalId
 * @property string $userName
 * @property string $awsAccountId
 */
class UserIdentity extends Shape
{
    /**
     * @param array{
     *     userType: 'USER'|'AWS_ACCOUNT'|'UNKNOWN',
     *     principalId: string,
     *     userName?: string,
     *     awsAccountId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
