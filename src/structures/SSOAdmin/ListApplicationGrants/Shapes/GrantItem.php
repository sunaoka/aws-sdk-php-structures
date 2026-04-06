<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\ListApplicationGrants\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Grant $Grant
 * @property 'authorization_code'|'refresh_token'|'urn:ietf:params:oauth:grant-type:jwt-bearer'|'urn:ietf:params:oauth:grant-type:token-exchange' $GrantType
 */
class GrantItem extends Shape
{
    /**
     * @param array{
     *     Grant: Grant,
     *     GrantType: 'authorization_code'|'refresh_token'|'urn:ietf:params:oauth:grant-type:jwt-bearer'|'urn:ietf:params:oauth:grant-type:token-exchange'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
