<?php

namespace Sunaoka\Aws\Structures\MediaPackageV2\UpdateOriginEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ManifestName
 * @property int<30, max>|null $ManifestWindowSeconds
 * @property FilterConfiguration|null $FilterConfiguration
 * @property 'FULL'|'COMPACT'|null $ManifestLayout
 */
class CreateMssManifestConfiguration extends Shape
{
    /**
     * @param array{
     *     ManifestName: string,
     *     ManifestWindowSeconds?: int<30, max>|null,
     *     FilterConfiguration?: FilterConfiguration|null,
     *     ManifestLayout?: 'FULL'|'COMPACT'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
