<?php

namespace Sunaoka\Aws\Structures\IoTSecureTunneling\RotateTunnelAccessToken;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $tunnelId
 * @property 'SOURCE'|'DESTINATION'|'ALL' $clientMode
 * @property Shapes\DestinationConfig|null $destinationConfig
 */
class RotateTunnelAccessTokenRequest extends Request
{
    /**
     * @param array{
     *     tunnelId: string,
     *     clientMode: 'SOURCE'|'DESTINATION'|'ALL',
     *     destinationConfig?: Shapes\DestinationConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
