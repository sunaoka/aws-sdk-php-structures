<?php

namespace Sunaoka\Aws\Structures\MediaPackageVod\CreatePackagingConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'FULL'|'COMPACT' $ManifestLayout
 * @property string $ManifestName
 * @property int $MinBufferTimeSeconds
 * @property 'NONE'|'HBBTV_1_5' $Profile
 * @property 'SEGMENTS'|'MANIFEST' $ScteMarkersSource
 * @property StreamSelection $StreamSelection
 */
class DashManifest extends Shape
{
    /**
     * @param array{
     *     ManifestLayout?: 'FULL'|'COMPACT',
     *     ManifestName?: string,
     *     MinBufferTimeSeconds?: int,
     *     Profile?: 'NONE'|'HBBTV_1_5',
     *     ScteMarkersSource?: 'SEGMENTS'|'MANIFEST',
     *     StreamSelection?: StreamSelection
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
