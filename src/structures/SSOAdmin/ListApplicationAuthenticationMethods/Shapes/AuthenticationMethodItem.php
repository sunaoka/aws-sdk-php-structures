<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\ListApplicationAuthenticationMethods\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AuthenticationMethod|null $AuthenticationMethod
 * @property 'IAM'|null $AuthenticationMethodType
 */
class AuthenticationMethodItem extends Shape
{
    /**
     * @param array{
     *     AuthenticationMethod?: AuthenticationMethod|null,
     *     AuthenticationMethodType?: 'IAM'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
