<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\ListWebAuthnCredentials;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccessToken
 * @property string $NextToken
 * @property int $MaxResults
 */
class ListWebAuthnCredentialsRequest extends Request
{
    /**
     * @param array{
     *     AccessToken: string,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
