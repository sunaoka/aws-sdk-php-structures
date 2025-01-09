<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\DeleteIdentityProvider;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserPoolId
 * @property string $ProviderName
 */
class DeleteIdentityProviderRequest extends Request
{
    /**
     * @param array{
     *     UserPoolId: string,
     *     ProviderName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
