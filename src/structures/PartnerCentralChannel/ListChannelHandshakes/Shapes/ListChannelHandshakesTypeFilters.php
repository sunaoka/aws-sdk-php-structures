<?php

namespace Sunaoka\Aws\Structures\PartnerCentralChannel\ListChannelHandshakes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property StartServicePeriodTypeFilters|null $startServicePeriodTypeFilters
 * @property RevokeServicePeriodTypeFilters|null $revokeServicePeriodTypeFilters
 * @property ProgramManagementAccountTypeFilters|null $programManagementAccountTypeFilters
 */
class ListChannelHandshakesTypeFilters extends Shape
{
    /**
     * @param array{
     *     startServicePeriodTypeFilters?: StartServicePeriodTypeFilters|null,
     *     revokeServicePeriodTypeFilters?: RevokeServicePeriodTypeFilters|null,
     *     programManagementAccountTypeFilters?: ProgramManagementAccountTypeFilters|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
