<?php

namespace Sunaoka\Aws\Structures\PartnerCentralChannel\ListChannelHandshakes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property StartServicePeriodHandshakeDetail|null $startServicePeriodHandshakeDetail
 * @property RevokeServicePeriodHandshakeDetail|null $revokeServicePeriodHandshakeDetail
 * @property ProgramManagementAccountHandshakeDetail|null $programManagementAccountHandshakeDetail
 */
class HandshakeDetail extends Shape
{
    /**
     * @param array{
     *     startServicePeriodHandshakeDetail?: StartServicePeriodHandshakeDetail|null,
     *     revokeServicePeriodHandshakeDetail?: RevokeServicePeriodHandshakeDetail|null,
     *     programManagementAccountHandshakeDetail?: ProgramManagementAccountHandshakeDetail|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
