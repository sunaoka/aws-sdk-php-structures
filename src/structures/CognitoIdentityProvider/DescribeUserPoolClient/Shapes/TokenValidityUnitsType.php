<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\DescribeUserPoolClient\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'seconds'|'minutes'|'hours'|'days'|null $AccessToken
 * @property 'seconds'|'minutes'|'hours'|'days'|null $IdToken
 * @property 'seconds'|'minutes'|'hours'|'days'|null $RefreshToken
 */
class TokenValidityUnitsType extends Shape
{
    /**
     * @param array{
     *     AccessToken?: 'seconds'|'minutes'|'hours'|'days'|null,
     *     IdToken?: 'seconds'|'minutes'|'hours'|'days'|null,
     *     RefreshToken?: 'seconds'|'minutes'|'hours'|'days'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
