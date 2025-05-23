<?php

namespace Sunaoka\Aws\Structures\MediaPackageV2\GetHarvestJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ManifestName
 */
class HarvestedLowLatencyHlsManifest extends Shape
{
    /**
     * @param array{ManifestName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
