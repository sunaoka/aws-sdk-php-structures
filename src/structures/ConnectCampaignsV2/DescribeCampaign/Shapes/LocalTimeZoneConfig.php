<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\DescribeCampaign\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $defaultTimeZone
 * @property list<'ZIP_CODE'|'AREA_CODE'> $localTimeZoneDetection
 */
class LocalTimeZoneConfig extends Shape
{
    /**
     * @param array{
     *     defaultTimeZone?: string,
     *     localTimeZoneDetection?: list<'ZIP_CODE'|'AREA_CODE'>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
