<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\PutApplicationGrant;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationArn
 * @property 'authorization_code'|'refresh_token'|'urn:ietf:params:oauth:grant-type:jwt-bearer'|'urn:ietf:params:oauth:grant-type:token-exchange' $GrantType
 * @property Shapes\Grant $Grant
 */
class PutApplicationGrantRequest extends Request
{
    /**
     * @param array{
     *     ApplicationArn: string,
     *     GrantType: 'authorization_code'|'refresh_token'|'urn:ietf:params:oauth:grant-type:jwt-bearer'|'urn:ietf:params:oauth:grant-type:token-exchange',
     *     Grant: Shapes\Grant
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
