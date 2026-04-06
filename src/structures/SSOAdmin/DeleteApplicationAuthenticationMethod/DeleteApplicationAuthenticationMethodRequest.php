<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\DeleteApplicationAuthenticationMethod;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationArn
 * @property 'IAM' $AuthenticationMethodType
 */
class DeleteApplicationAuthenticationMethodRequest extends Request
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
