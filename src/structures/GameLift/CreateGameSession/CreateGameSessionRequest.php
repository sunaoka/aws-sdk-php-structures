<?php

namespace Sunaoka\Aws\Structures\GameLift\CreateGameSession;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FleetId
 * @property string $AliasId
 * @property int $MaximumPlayerSessionCount
 * @property string $Name
 * @property list<Shapes\GameProperty> $GameProperties
 * @property string $CreatorId
 * @property string $GameSessionId
 * @property string $IdempotencyToken
 * @property string $GameSessionData
 * @property string $Location
 */
class CreateGameSessionRequest extends Request
{
    /**
     * @param array{
     *     FleetId?: string,
     *     AliasId?: string,
     *     MaximumPlayerSessionCount: int,
     *     Name?: string,
     *     GameProperties?: list<Shapes\GameProperty>,
     *     CreatorId?: string,
     *     GameSessionId?: string,
     *     IdempotencyToken?: string,
     *     GameSessionData?: string,
     *     Location?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
