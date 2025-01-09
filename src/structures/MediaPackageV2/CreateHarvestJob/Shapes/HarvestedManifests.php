<?php

namespace Sunaoka\Aws\Structures\MediaPackageV2\CreateHarvestJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<HarvestedHlsManifest> $HlsManifests
 * @property list<HarvestedDashManifest> $DashManifests
 * @property list<HarvestedLowLatencyHlsManifest> $LowLatencyHlsManifests
 */
class HarvestedManifests extends Shape
{
    /**
     * @param array{
     *     HlsManifests?: list<HarvestedHlsManifest>,
     *     DashManifests?: list<HarvestedDashManifest>,
     *     LowLatencyHlsManifests?: list<HarvestedLowLatencyHlsManifest>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
