<?php

namespace Sunaoka\Aws\Structures\MediaPackageVod\DescribePackagingConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'FULL'|'COMPACT'|null $ManifestLayout
 * @property string|null $ManifestName
 * @property int|null $MinBufferTimeSeconds
 * @property 'NONE'|'HBBTV_1_5'|null $Profile
 * @property 'SEGMENTS'|'MANIFEST'|null $ScteMarkersSource
 * @property StreamSelection|null $StreamSelection
 */
class DashManifest extends Shape
{
    /**
     * @param array{
     *     ManifestLayout?: 'FULL'|'COMPACT'|null,
     *     ManifestName?: string|null,
     *     MinBufferTimeSeconds?: int|null,
     *     Profile?: 'NONE'|'HBBTV_1_5'|null,
     *     ScteMarkersSource?: 'SEGMENTS'|'MANIFEST'|null,
     *     StreamSelection?: StreamSelection|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
