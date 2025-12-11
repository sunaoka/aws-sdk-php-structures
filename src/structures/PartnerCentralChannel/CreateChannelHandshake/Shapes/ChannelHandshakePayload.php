<?php

namespace Sunaoka\Aws\Structures\PartnerCentralChannel\CreateChannelHandshake\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property StartServicePeriodPayload|null $startServicePeriodPayload
 * @property RevokeServicePeriodPayload|null $revokeServicePeriodPayload
 */
class ChannelHandshakePayload extends Shape
{
    /**
     * @param array{
     *     startServicePeriodPayload?: StartServicePeriodPayload|null,
     *     revokeServicePeriodPayload?: RevokeServicePeriodPayload|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
