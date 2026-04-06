<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateActionConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AuthorizationCodeGrantDetails|null $AuthorizationCodeGrantDetails
 */
class AuthorizationCodeGrantCredentialsDetails extends Shape
{
    /**
     * @param array{AuthorizationCodeGrantDetails?: AuthorizationCodeGrantDetails|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
