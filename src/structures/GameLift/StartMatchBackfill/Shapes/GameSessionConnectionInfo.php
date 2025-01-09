<?php

namespace Sunaoka\Aws\Structures\GameLift\StartMatchBackfill\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $GameSessionArn
 * @property string $IpAddress
 * @property string $DnsName
 * @property int $Port
 * @property list<MatchedPlayerSession> $MatchedPlayerSessions
 */
class GameSessionConnectionInfo extends Shape
{
    /**
     * @param array{
     *     GameSessionArn?: string,
     *     IpAddress?: string,
     *     DnsName?: string,
     *     Port?: int,
     *     MatchedPlayerSessions?: list<MatchedPlayerSession>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
