<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\GetApplicationAuthenticationMethod;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationArn
 * @property 'IAM' $AuthenticationMethodType
 */
class GetApplicationAuthenticationMethodRequest extends Request
{
    /**
     * @param array{
     *     ApplicationArn: string,
     *     AuthenticationMethodType: 'IAM'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
