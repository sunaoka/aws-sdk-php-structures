<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\AssociateSoftwareToken;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $AccessToken
 * @property string|null $Session
 */
class AssociateSoftwareTokenRequest extends Request
{
    /**
     * @param array{
     *     AccessToken?: string|null,
     *     Session?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
