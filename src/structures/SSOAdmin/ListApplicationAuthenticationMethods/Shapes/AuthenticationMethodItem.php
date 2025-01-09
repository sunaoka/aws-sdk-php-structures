<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\ListApplicationAuthenticationMethods\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AuthenticationMethod $AuthenticationMethod
 * @property 'IAM' $AuthenticationMethodType
 */
class AuthenticationMethodItem extends Shape
{
    /**
     * @param array{
     *     AuthenticationMethod?: AuthenticationMethod,
     *     AuthenticationMethodType?: 'IAM'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
