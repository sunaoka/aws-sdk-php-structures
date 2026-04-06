<?php

namespace Sunaoka\Aws\Structures\MediaConnect\BatchGetRouterOutput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $NetworkInterfaceArn
 * @property RouterOutputProtocolConfiguration $ProtocolConfiguration
 * @property 'RTP'|'RIST'|'SRT_CALLER'|'SRT_LISTENER'|null $Protocol
 */
class StandardRouterOutputConfiguration extends Shape
{
    /**
     * @param array{
     *     NetworkInterfaceArn: string,
     *     ProtocolConfiguration: RouterOutputProtocolConfiguration,
     *     Protocol?: 'RTP'|'RIST'|'SRT_CALLER'|'SRT_LISTENER'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
