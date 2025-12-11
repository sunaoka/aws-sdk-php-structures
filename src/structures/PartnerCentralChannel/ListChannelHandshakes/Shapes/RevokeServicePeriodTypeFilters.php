<?php

namespace Sunaoka\Aws\Structures\PartnerCentralChannel\ListChannelHandshakes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'MINIMUM_NOTICE_PERIOD'|'FIXED_COMMITMENT_PERIOD'>|null $servicePeriodTypes
 */
class RevokeServicePeriodTypeFilters extends Shape
{
    /**
     * @param array{servicePeriodTypes?: list<'MINIMUM_NOTICE_PERIOD'|'FIXED_COMMITMENT_PERIOD'>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
