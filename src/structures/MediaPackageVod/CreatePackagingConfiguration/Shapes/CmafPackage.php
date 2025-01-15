<?php

namespace Sunaoka\Aws\Structures\MediaPackageVod\CreatePackagingConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CmafEncryption|null $Encryption
 * @property list<HlsManifest> $HlsManifests
 * @property bool|null $IncludeEncoderConfigurationInSegments
 * @property int|null $SegmentDurationSeconds
 */
class CmafPackage extends Shape
{
    /**
     * @param array{
     *     Encryption?: CmafEncryption|null,
     *     HlsManifests: list<HlsManifest>,
     *     IncludeEncoderConfigurationInSegments?: bool|null,
     *     SegmentDurationSeconds?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
