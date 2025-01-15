<?php

namespace Sunaoka\Aws\Structures\IoTSecureTunneling\OpenTunnel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $description
 * @property list<Shapes\Tag>|null $tags
 * @property Shapes\DestinationConfig|null $destinationConfig
 * @property Shapes\TimeoutConfig|null $timeoutConfig
 */
class OpenTunnelRequest extends Request
{
    /**
     * @param array{
     *     description?: string|null,
     *     tags?: list<Shapes\Tag>|null,
     *     destinationConfig?: Shapes\DestinationConfig|null,
     *     timeoutConfig?: Shapes\TimeoutConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
