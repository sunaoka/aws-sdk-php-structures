<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\ListApplicationGrants\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'authorization_code'|'refresh_token'|'urn:ietf:params:oauth:grant-type:jwt-bearer'|'urn:ietf:params:oauth:grant-type:token-exchange' $GrantType
 * @property Grant $Grant
 */
class GrantItem extends Shape
{
    /**
     * @param array{
     *     GrantType: 'authorization_code'|'refresh_token'|'urn:ietf:params:oauth:grant-type:jwt-bearer'|'urn:ietf:params:oauth:grant-type:token-exchange',
     *     Grant: Grant
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
