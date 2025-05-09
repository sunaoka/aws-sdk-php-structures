<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\ListApplicationAuthenticationMethods\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'IAM'|null $AuthenticationMethodType
 * @property AuthenticationMethod|null $AuthenticationMethod
 */
class AuthenticationMethodItem extends Shape
{
    /**
     * @param array{
     *     AuthenticationMethodType?: 'IAM'|null,
     *     AuthenticationMethod?: AuthenticationMethod|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
