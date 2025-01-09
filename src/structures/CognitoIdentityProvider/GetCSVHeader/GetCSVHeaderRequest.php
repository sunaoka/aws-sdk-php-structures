<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\GetCSVHeader;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserPoolId
 */
class GetCSVHeaderRequest extends Request
{
    /**
     * @param array{UserPoolId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
