<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\UpdateCampaignCommunicationTime\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $defaultTimeZone
 * @property list<'ZIP_CODE'|'AREA_CODE'>|null $localTimeZoneDetection
 * @property 'PRIMARY_ONLY'|'ALL_AVAILABLE'|null $localTimeZoneDetectionScope
 */
class LocalTimeZoneConfig extends Shape
{
    /**
     * @param array{
     *     defaultTimeZone?: string|null,
     *     localTimeZoneDetection?: list<'ZIP_CODE'|'AREA_CODE'>|null,
     *     localTimeZoneDetectionScope?: 'PRIMARY_ONLY'|'ALL_AVAILABLE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
