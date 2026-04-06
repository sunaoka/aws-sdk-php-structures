<?php

namespace Sunaoka\Aws\Structures\PartnerCentralChannel\ListChannelHandshakes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property StartServicePeriodTypeSort|null $startServicePeriodTypeSort
 * @property RevokeServicePeriodTypeSort|null $revokeServicePeriodTypeSort
 * @property ProgramManagementAccountTypeSort|null $programManagementAccountTypeSort
 */
class ListChannelHandshakesTypeSort extends Shape
{
    /**
     * @param array{
     *     startServicePeriodTypeSort?: StartServicePeriodTypeSort|null,
     *     revokeServicePeriodTypeSort?: RevokeServicePeriodTypeSort|null,
     *     programManagementAccountTypeSort?: ProgramManagementAccountTypeSort|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
