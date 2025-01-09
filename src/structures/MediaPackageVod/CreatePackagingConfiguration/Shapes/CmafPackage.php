<?php

namespace Sunaoka\Aws\Structures\MediaPackageVod\CreatePackagingConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CmafEncryption $Encryption
 * @property list<HlsManifest> $HlsManifests
 * @property bool $IncludeEncoderConfigurationInSegments
 * @property int $SegmentDurationSeconds
 */
class CmafPackage extends Shape
{
    /**
     * @param array{
     *     Encryption?: CmafEncryption,
     *     HlsManifests: list<HlsManifest>,
     *     IncludeEncoderConfigurationInSegments?: bool,
     *     SegmentDurationSeconds?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
