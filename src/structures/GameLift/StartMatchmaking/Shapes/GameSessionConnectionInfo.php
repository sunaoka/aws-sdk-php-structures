<?php

namespace Sunaoka\Aws\Structures\GameLift\StartMatchmaking\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $GameSessionArn
 * @property string $IpAddress
 * @property string $DnsName
 * @property int<1, max> $Port
 * @property list<MatchedPlayerSession> $MatchedPlayerSessions
 */
class GameSessionConnectionInfo extends Shape
{
    /**
     * @param array{
     *     GameSessionArn?: string,
     *     IpAddress?: string,
     *     DnsName?: string,
     *     Port?: int<1, max>,
     *     MatchedPlayerSessions?: list<MatchedPlayerSession>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
