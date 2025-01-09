<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\CreateCampaign\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LocalTimeZoneConfig $localTimeZoneConfig
 * @property TimeWindow $telephony
 * @property TimeWindow $sms
 * @property TimeWindow $email
 */
class CommunicationTimeConfig extends Shape
{
    /**
     * @param array{
     *     localTimeZoneConfig: LocalTimeZoneConfig,
     *     telephony?: TimeWindow,
     *     sms?: TimeWindow,
     *     email?: TimeWindow
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
