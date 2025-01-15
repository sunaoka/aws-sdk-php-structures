<?php

namespace Sunaoka\Aws\Structures\Appstream\CreateUser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserName
 * @property 'SUPPRESS'|'RESEND'|null $MessageAction
 * @property string|null $FirstName
 * @property string|null $LastName
 * @property 'API'|'SAML'|'USERPOOL'|'AWS_AD' $AuthenticationType
 */
class CreateUserRequest extends Request
{
    /**
     * @param array{
     *     UserName: string,
     *     MessageAction?: 'SUPPRESS'|'RESEND'|null,
     *     FirstName?: string|null,
     *     LastName?: string|null,
     *     AuthenticationType: 'API'|'SAML'|'USERPOOL'|'AWS_AD'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
