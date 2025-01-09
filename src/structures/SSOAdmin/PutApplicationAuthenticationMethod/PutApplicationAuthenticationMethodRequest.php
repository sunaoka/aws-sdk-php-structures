<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\PutApplicationAuthenticationMethod;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationArn
 * @property Shapes\AuthenticationMethod $AuthenticationMethod
 * @property 'IAM' $AuthenticationMethodType
 */
class PutApplicationAuthenticationMethodRequest extends Request
{
    /**
     * @param array{
     *     ApplicationArn: string,
     *     AuthenticationMethod: Shapes\AuthenticationMethod,
     *     AuthenticationMethodType: 'IAM'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
