<?php

namespace Sunaoka\Aws\Structures\MediaPackageV2\CreateHarvestJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<HarvestedHlsManifest>|null $HlsManifests
 * @property list<HarvestedDashManifest>|null $DashManifests
 * @property list<HarvestedLowLatencyHlsManifest>|null $LowLatencyHlsManifests
 */
class HarvestedManifests extends Shape
{
    /**
     * @param array{
     *     HlsManifests?: list<HarvestedHlsManifest>|null,
     *     DashManifests?: list<HarvestedDashManifest>|null,
     *     LowLatencyHlsManifests?: list<HarvestedLowLatencyHlsManifest>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
