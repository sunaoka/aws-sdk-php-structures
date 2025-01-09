<?php

namespace Sunaoka\Aws\Structures\GameLift\UpdateGameSession;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GameSessionId
 * @property int $MaximumPlayerSessionCount
 * @property string $Name
 * @property 'ACCEPT_ALL'|'DENY_ALL' $PlayerSessionCreationPolicy
 * @property 'NoProtection'|'FullProtection' $ProtectionPolicy
 * @property list<Shapes\GameProperty> $GameProperties
 */
class UpdateGameSessionRequest extends Request
{
    /**
     * @param array{
     *     GameSessionId: string,
     *     MaximumPlayerSessionCount?: int,
     *     Name?: string,
     *     PlayerSessionCreationPolicy?: 'ACCEPT_ALL'|'DENY_ALL',
     *     ProtectionPolicy?: 'NoProtection'|'FullProtection',
     *     GameProperties?: list<Shapes\GameProperty>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
