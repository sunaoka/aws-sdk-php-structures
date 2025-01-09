<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\ListUserPoolClients\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ClientId
 * @property string $UserPoolId
 * @property string $ClientName
 */
class UserPoolClientDescription extends Shape
{
    /**
     * @param array{
     *     ClientId?: string,
     *     UserPoolId?: string,
     *     ClientName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
