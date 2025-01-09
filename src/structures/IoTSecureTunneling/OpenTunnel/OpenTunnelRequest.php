<?php

namespace Sunaoka\Aws\Structures\IoTSecureTunneling\OpenTunnel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $description
 * @property list<Shapes\Tag> $tags
 * @property Shapes\DestinationConfig $destinationConfig
 * @property Shapes\TimeoutConfig $timeoutConfig
 */
class OpenTunnelRequest extends Request
{
    /**
     * @param array{
     *     description?: string,
     *     tags?: list<Shapes\Tag>,
     *     destinationConfig?: Shapes\DestinationConfig,
     *     timeoutConfig?: Shapes\TimeoutConfig
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
