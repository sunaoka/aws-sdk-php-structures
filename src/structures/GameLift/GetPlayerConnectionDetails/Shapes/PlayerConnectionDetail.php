<?php

namespace Sunaoka\Aws\Structures\GameLift\GetPlayerConnectionDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PlayerId
 * @property list<PlayerConnectionEndpoint>|null $Endpoints
 * @property string|null $PlayerGatewayToken
 * @property \Aws\Api\DateTimeResult|null $Expiration
 */
class PlayerConnectionDetail extends Shape
{
    /**
     * @param array{
     *     PlayerId?: string|null,
     *     Endpoints?: list<PlayerConnectionEndpoint>|null,
     *     PlayerGatewayToken?: string|null,
     *     Expiration?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
