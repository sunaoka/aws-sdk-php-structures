<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\PutApplicationGrant;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationArn
 * @property Shapes\Grant $Grant
 * @property 'authorization_code'|'refresh_token'|'urn:ietf:params:oauth:grant-type:jwt-bearer'|'urn:ietf:params:oauth:grant-type:token-exchange' $GrantType
 */
class PutApplicationGrantRequest extends Request
{
    /**
     * @param array{
     *     ApplicationArn: string,
     *     Grant: Shapes\Grant,
     *     GrantType: 'authorization_code'|'refresh_token'|'urn:ietf:params:oauth:grant-type:jwt-bearer'|'urn:ietf:params:oauth:grant-type:token-exchange'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
