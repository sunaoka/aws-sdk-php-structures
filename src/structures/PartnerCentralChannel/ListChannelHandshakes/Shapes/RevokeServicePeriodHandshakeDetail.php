<?php

namespace Sunaoka\Aws\Structures\PartnerCentralChannel\ListChannelHandshakes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $note
 * @property 'MINIMUM_NOTICE_PERIOD'|'FIXED_COMMITMENT_PERIOD'|null $servicePeriodType
 * @property string|null $minimumNoticeDays
 * @property \Aws\Api\DateTimeResult|null $startDate
 * @property \Aws\Api\DateTimeResult|null $endDate
 */
class RevokeServicePeriodHandshakeDetail extends Shape
{
    /**
     * @param array{
     *     note?: string|null,
     *     servicePeriodType?: 'MINIMUM_NOTICE_PERIOD'|'FIXED_COMMITMENT_PERIOD'|null,
     *     minimumNoticeDays?: string|null,
     *     startDate?: \Aws\Api\DateTimeResult|null,
     *     endDate?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
