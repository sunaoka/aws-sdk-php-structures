<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\CreateIdentitySource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CognitoUserPoolConfiguration|null $cognitoUserPoolConfiguration
 */
class Configuration extends Shape
{
    /**
     * @param array{cognitoUserPoolConfiguration?: CognitoUserPoolConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
