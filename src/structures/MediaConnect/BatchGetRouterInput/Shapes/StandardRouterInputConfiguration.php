<?php

namespace Sunaoka\Aws\Structures\MediaConnect\BatchGetRouterInput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $NetworkInterfaceArn
 * @property RouterInputProtocolConfiguration $ProtocolConfiguration
 * @property 'RTP'|'RIST'|'SRT_CALLER'|'SRT_LISTENER'|null $Protocol
 */
class StandardRouterInputConfiguration extends Shape
{
    /**
     * @param array{
     *     NetworkInterfaceArn: string,
     *     ProtocolConfiguration: RouterInputProtocolConfiguration,
     *     Protocol?: 'RTP'|'RIST'|'SRT_CALLER'|'SRT_LISTENER'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
