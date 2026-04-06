<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\PutApplicationAuthenticationMethod;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationArn
 * @property 'IAM' $AuthenticationMethodType
 * @property Shapes\AuthenticationMethod $AuthenticationMethod
 */
class PutApplicationAuthenticationMethodRequest extends Request
{
    /**
     * @param array{
     *     ApplicationArn: string,
     *     AuthenticationMethodType: 'IAM',
     *     AuthenticationMethod: Shapes\AuthenticationMethod
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
