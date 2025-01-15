<?php

namespace Sunaoka\Aws\Structures\MediaPackageVod\CreatePackagingConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property HlsEncryption|null $Encryption
 * @property list<HlsManifest> $HlsManifests
 * @property bool|null $IncludeDvbSubtitles
 * @property int|null $SegmentDurationSeconds
 * @property bool|null $UseAudioRenditionGroup
 */
class HlsPackage extends Shape
{
    /**
     * @param array{
     *     Encryption?: HlsEncryption|null,
     *     HlsManifests: list<HlsManifest>,
     *     IncludeDvbSubtitles?: bool|null,
     *     SegmentDurationSeconds?: int|null,
     *     UseAudioRenditionGroup?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
