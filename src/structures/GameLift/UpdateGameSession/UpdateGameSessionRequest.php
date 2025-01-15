<?php

namespace Sunaoka\Aws\Structures\GameLift\UpdateGameSession;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GameSessionId
 * @property int<0, max>|null $MaximumPlayerSessionCount
 * @property string|null $Name
 * @property 'ACCEPT_ALL'|'DENY_ALL'|null $PlayerSessionCreationPolicy
 * @property 'NoProtection'|'FullProtection'|null $ProtectionPolicy
 * @property list<Shapes\GameProperty>|null $GameProperties
 */
class UpdateGameSessionRequest extends Request
{
    /**
     * @param array{
     *     GameSessionId: string,
     *     MaximumPlayerSessionCount?: int<0, max>|null,
     *     Name?: string|null,
     *     PlayerSessionCreationPolicy?: 'ACCEPT_ALL'|'DENY_ALL'|null,
     *     ProtectionPolicy?: 'NoProtection'|'FullProtection'|null,
     *     GameProperties?: list<Shapes\GameProperty>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
