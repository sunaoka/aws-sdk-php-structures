<?php

namespace Sunaoka\Aws\Structures\MediaPackageVod\DescribePackagingConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MssEncryption|null $Encryption
 * @property list<MssManifest> $MssManifests
 * @property int|null $SegmentDurationSeconds
 */
class MssPackage extends Shape
{
    /**
     * @param array{
     *     Encryption?: MssEncryption|null,
     *     MssManifests: list<MssManifest>,
     *     SegmentDurationSeconds?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
