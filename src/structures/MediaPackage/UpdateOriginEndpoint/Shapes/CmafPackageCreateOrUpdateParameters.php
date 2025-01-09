<?php

namespace Sunaoka\Aws\Structures\MediaPackage\UpdateOriginEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CmafEncryption $Encryption
 * @property list<HlsManifestCreateOrUpdateParameters> $HlsManifests
 * @property int $SegmentDurationSeconds
 * @property string $SegmentPrefix
 * @property StreamSelection $StreamSelection
 */
class CmafPackageCreateOrUpdateParameters extends Shape
{
    /**
     * @param array{
     *     Encryption?: CmafEncryption,
     *     HlsManifests?: list<HlsManifestCreateOrUpdateParameters>,
     *     SegmentDurationSeconds?: int,
     *     SegmentPrefix?: string,
     *     StreamSelection?: StreamSelection
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
