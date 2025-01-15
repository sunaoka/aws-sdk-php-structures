<?php

namespace Sunaoka\Aws\Structures\CognitoIdentity\ListIdentityPools\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $IdentityPoolId
 * @property string|null $IdentityPoolName
 */
class IdentityPoolShortDescription extends Shape
{
    /**
     * @param array{
     *     IdentityPoolId?: string|null,
     *     IdentityPoolName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
