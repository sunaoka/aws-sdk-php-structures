<?php

namespace Sunaoka\Aws\Structures\Appstream\CreateUser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserName
 * @property 'SUPPRESS'|'RESEND' $MessageAction
 * @property string $FirstName
 * @property string $LastName
 * @property 'API'|'SAML'|'USERPOOL'|'AWS_AD' $AuthenticationType
 */
class CreateUserRequest extends Request
{
    /**
     * @param array{
     *     UserName: string,
     *     MessageAction?: 'SUPPRESS'|'RESEND',
     *     FirstName?: string,
     *     LastName?: string,
     *     AuthenticationType: 'API'|'SAML'|'USERPOOL'|'AWS_AD'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
