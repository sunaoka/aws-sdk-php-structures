<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\DescribeCampaign\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $defaultTimeZone
 * @property list<'ZIP_CODE'|'AREA_CODE'>|null $localTimeZoneDetection
 */
class LocalTimeZoneConfig extends Shape
{
    /**
     * @param array{
     *     defaultTimeZone?: string|null,
     *     localTimeZoneDetection?: list<'ZIP_CODE'|'AREA_CODE'>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
