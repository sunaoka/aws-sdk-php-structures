<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\UpdateCampaignCommunicationTime\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LocalTimeZoneConfig $localTimeZoneConfig
 * @property TimeWindow|null $telephony
 * @property TimeWindow|null $sms
 * @property TimeWindow|null $email
 * @property TimeWindow|null $whatsApp
 */
class CommunicationTimeConfig extends Shape
{
    /**
     * @param array{
     *     localTimeZoneConfig: LocalTimeZoneConfig,
     *     telephony?: TimeWindow|null,
     *     sms?: TimeWindow|null,
     *     email?: TimeWindow|null,
     *     whatsApp?: TimeWindow|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
