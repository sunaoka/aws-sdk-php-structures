<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\ListUserPoolClients\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ClientId
 * @property string|null $UserPoolId
 * @property string|null $ClientName
 */
class UserPoolClientDescription extends Shape
{
    /**
     * @param array{
     *     ClientId?: string|null,
     *     UserPoolId?: string|null,
     *     ClientName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
