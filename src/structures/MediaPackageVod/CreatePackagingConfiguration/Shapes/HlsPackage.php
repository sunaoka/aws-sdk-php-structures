<?php

namespace Sunaoka\Aws\Structures\MediaPackageVod\CreatePackagingConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property HlsEncryption $Encryption
 * @property list<HlsManifest> $HlsManifests
 * @property bool $IncludeDvbSubtitles
 * @property int $SegmentDurationSeconds
 * @property bool $UseAudioRenditionGroup
 */
class HlsPackage extends Shape
{
    /**
     * @param array{
     *     Encryption?: HlsEncryption,
     *     HlsManifests: list<HlsManifest>,
     *     IncludeDvbSubtitles?: bool,
     *     SegmentDurationSeconds?: int,
     *     UseAudioRenditionGroup?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
