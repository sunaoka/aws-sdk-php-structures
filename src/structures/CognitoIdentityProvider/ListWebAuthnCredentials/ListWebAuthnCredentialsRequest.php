<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\ListWebAuthnCredentials;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccessToken
 * @property string $NextToken
 * @property int<0, 20> $MaxResults
 */
class ListWebAuthnCredentialsRequest extends Request
{
    /**
     * @param array{
     *     AccessToken: string,
     *     NextToken?: string,
     *     MaxResults?: int<0, 20>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
