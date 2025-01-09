<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\DeleteUserPoolDomain;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Domain
 * @property string $UserPoolId
 */
class DeleteUserPoolDomainRequest extends Request
{
    /**
     * @param array{
     *     Domain: string,
     *     UserPoolId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
