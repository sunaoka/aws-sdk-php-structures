<?php

namespace Sunaoka\Aws\Structures\GameLift\StartMatchBackfill\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $GameSessionArn
 * @property string|null $IpAddress
 * @property string|null $DnsName
 * @property int<1, max>|null $Port
 * @property list<MatchedPlayerSession>|null $MatchedPlayerSessions
 */
class GameSessionConnectionInfo extends Shape
{
    /**
     * @param array{
     *     GameSessionArn?: string|null,
     *     IpAddress?: string|null,
     *     DnsName?: string|null,
     *     Port?: int<1, max>|null,
     *     MatchedPlayerSessions?: list<MatchedPlayerSession>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
