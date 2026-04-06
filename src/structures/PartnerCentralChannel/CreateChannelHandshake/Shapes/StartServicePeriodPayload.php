<?php

namespace Sunaoka\Aws\Structures\PartnerCentralChannel\CreateChannelHandshake\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $programManagementAccountIdentifier
 * @property string|null $note
 * @property 'MINIMUM_NOTICE_PERIOD'|'FIXED_COMMITMENT_PERIOD' $servicePeriodType
 * @property string|null $minimumNoticeDays
 * @property \Aws\Api\DateTimeResult|null $endDate
 */
class StartServicePeriodPayload extends Shape
{
    /**
     * @param array{
     *     programManagementAccountIdentifier: string,
     *     note?: string|null,
     *     servicePeriodType: 'MINIMUM_NOTICE_PERIOD'|'FIXED_COMMITMENT_PERIOD',
     *     minimumNoticeDays?: string|null,
     *     endDate?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
