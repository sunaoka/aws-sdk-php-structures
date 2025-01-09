<?php

namespace Sunaoka\Aws\Structures\CognitoSync\GetIdentityPoolConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IdentityPoolId
 */
class GetIdentityPoolConfigurationRequest extends Request
{
    /**
     * @param array{IdentityPoolId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
