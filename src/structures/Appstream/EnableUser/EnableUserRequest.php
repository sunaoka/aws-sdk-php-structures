<?php

namespace Sunaoka\Aws\Structures\Appstream\EnableUser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserName
 * @property 'API'|'SAML'|'USERPOOL'|'AWS_AD' $AuthenticationType
 */
class EnableUserRequest extends Request
{
    /**
     * @param array{
     *     UserName: string,
     *     AuthenticationType: 'API'|'SAML'|'USERPOOL'|'AWS_AD'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
