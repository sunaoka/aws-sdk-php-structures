<?php

namespace Sunaoka\Aws\Structures\MediaPackageV2\GetOriginEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ManifestName
 * @property string $Url
 * @property FilterConfiguration|null $FilterConfiguration
 * @property int|null $ManifestWindowSeconds
 * @property 'FULL'|'COMPACT'|null $ManifestLayout
 */
class GetMssManifestConfiguration extends Shape
{
    /**
     * @param array{
     *     ManifestName: string,
     *     Url: string,
     *     FilterConfiguration?: FilterConfiguration|null,
     *     ManifestWindowSeconds?: int|null,
     *     ManifestLayout?: 'FULL'|'COMPACT'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
