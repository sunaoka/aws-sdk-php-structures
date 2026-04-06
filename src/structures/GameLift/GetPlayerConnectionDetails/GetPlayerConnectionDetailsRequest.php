<?php

namespace Sunaoka\Aws\Structures\GameLift\GetPlayerConnectionDetails;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GameSessionId
 * @property list<string> $PlayerIds
 */
class GetPlayerConnectionDetailsRequest extends Request
{
    /**
     * @param array{
     *     GameSessionId: string,
     *     PlayerIds: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
