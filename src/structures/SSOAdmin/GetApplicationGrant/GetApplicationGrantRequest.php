<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\GetApplicationGrant;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationArn
 * @property 'authorization_code'|'refresh_token'|'urn:ietf:params:oauth:grant-type:jwt-bearer'|'urn:ietf:params:oauth:grant-type:token-exchange' $GrantType
 */
class GetApplicationGrantRequest extends Request
{
    /**
     * @param array{
     *     ApplicationArn: string,
     *     GrantType: 'authorization_code'|'refresh_token'|'urn:ietf:params:oauth:grant-type:jwt-bearer'|'urn:ietf:params:oauth:grant-type:token-exchange'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
