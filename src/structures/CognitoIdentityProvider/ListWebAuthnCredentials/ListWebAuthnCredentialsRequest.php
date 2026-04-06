<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\ListWebAuthnCredentials;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccessToken
 * @property string|null $NextToken
 * @property int<0, 20>|null $MaxResults
 */
class ListWebAuthnCredentialsRequest extends Request
{
    /**
     * @param array{
     *     AccessToken: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<0, 20>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
