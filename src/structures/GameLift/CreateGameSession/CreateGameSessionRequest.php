<?php

namespace Sunaoka\Aws\Structures\GameLift\CreateGameSession;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $FleetId
 * @property string|null $AliasId
 * @property int<0, max> $MaximumPlayerSessionCount
 * @property string|null $Name
 * @property list<Shapes\GameProperty>|null $GameProperties
 * @property string|null $CreatorId
 * @property string|null $GameSessionId
 * @property string|null $IdempotencyToken
 * @property string|null $GameSessionData
 * @property string|null $Location
 */
class CreateGameSessionRequest extends Request
{
    /**
     * @param array{
     *     FleetId?: string|null,
     *     AliasId?: string|null,
     *     MaximumPlayerSessionCount: int<0, max>,
     *     Name?: string|null,
     *     GameProperties?: list<Shapes\GameProperty>|null,
     *     CreatorId?: string|null,
     *     GameSessionId?: string|null,
     *     IdempotencyToken?: string|null,
     *     GameSessionData?: string|null,
     *     Location?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
