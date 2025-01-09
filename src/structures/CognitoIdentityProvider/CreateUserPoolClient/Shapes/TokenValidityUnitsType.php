<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\CreateUserPoolClient\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'seconds'|'minutes'|'hours'|'days' $AccessToken
 * @property 'seconds'|'minutes'|'hours'|'days' $IdToken
 * @property 'seconds'|'minutes'|'hours'|'days' $RefreshToken
 */
class TokenValidityUnitsType extends Shape
{
    /**
     * @param array{
     *     AccessToken?: 'seconds'|'minutes'|'hours'|'days',
     *     IdToken?: 'seconds'|'minutes'|'hours'|'days',
     *     RefreshToken?: 'seconds'|'minutes'|'hours'|'days'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
