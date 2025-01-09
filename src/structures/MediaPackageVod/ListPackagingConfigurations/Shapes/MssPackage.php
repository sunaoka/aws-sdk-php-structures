<?php

namespace Sunaoka\Aws\Structures\MediaPackageVod\ListPackagingConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MssEncryption $Encryption
 * @property list<MssManifest> $MssManifests
 * @property int $SegmentDurationSeconds
 */
class MssPackage extends Shape
{
    /**
     * @param array{
     *     Encryption?: MssEncryption,
     *     MssManifests: list<MssManifest>,
     *     SegmentDurationSeconds?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
