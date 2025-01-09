<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\GetUserAuthFactors;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccessToken
 */
class GetUserAuthFactorsRequest extends Request
{
    /**
     * @param array{AccessToken: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
