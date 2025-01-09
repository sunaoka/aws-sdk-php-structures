<?php

namespace Sunaoka\Aws\Structures\CognitoIdentity\ListIdentityPools\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $IdentityPoolId
 * @property string $IdentityPoolName
 */
class IdentityPoolShortDescription extends Shape
{
    /**
     * @param array{
     *     IdentityPoolId?: string,
     *     IdentityPoolName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
