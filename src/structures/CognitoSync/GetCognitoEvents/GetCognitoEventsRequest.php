<?php

namespace Sunaoka\Aws\Structures\CognitoSync\GetCognitoEvents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IdentityPoolId
 */
class GetCognitoEventsRequest extends Request
{
    /**
     * @param array{IdentityPoolId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
