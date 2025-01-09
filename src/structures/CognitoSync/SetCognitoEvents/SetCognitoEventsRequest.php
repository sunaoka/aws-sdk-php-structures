<?php

namespace Sunaoka\Aws\Structures\CognitoSync\SetCognitoEvents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IdentityPoolId
 * @property array<string, string> $Events
 */
class SetCognitoEventsRequest extends Request
{
    /**
     * @param array{
     *     IdentityPoolId: string,
     *     Events: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
