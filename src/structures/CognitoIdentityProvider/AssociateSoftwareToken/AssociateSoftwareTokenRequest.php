<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\AssociateSoftwareToken;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccessToken
 * @property string $Session
 */
class AssociateSoftwareTokenRequest extends Request
{
    /**
     * @param array{
     *     AccessToken?: string,
     *     Session?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
