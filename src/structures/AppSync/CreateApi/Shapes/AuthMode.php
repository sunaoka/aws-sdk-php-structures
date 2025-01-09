<?php

namespace Sunaoka\Aws\Structures\AppSync\CreateApi\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'API_KEY'|'AWS_IAM'|'AMAZON_COGNITO_USER_POOLS'|'OPENID_CONNECT'|'AWS_LAMBDA' $authType
 */
class AuthMode extends Shape
{
    /**
     * @param array{authType: 'API_KEY'|'AWS_IAM'|'AMAZON_COGNITO_USER_POOLS'|'OPENID_CONNECT'|'AWS_LAMBDA'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
