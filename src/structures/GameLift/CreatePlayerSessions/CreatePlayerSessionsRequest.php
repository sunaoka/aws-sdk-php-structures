<?php

namespace Sunaoka\Aws\Structures\GameLift\CreatePlayerSessions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GameSessionId
 * @property list<string> $PlayerIds
 * @property array<string, string> $PlayerDataMap
 */
class CreatePlayerSessionsRequest extends Request
{
    /**
     * @param array{
     *     GameSessionId: string,
     *     PlayerIds: list<string>,
     *     PlayerDataMap?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
