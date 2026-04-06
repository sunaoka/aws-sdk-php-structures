<?php

namespace Sunaoka\Aws\Structures\Ec2\ImportVolume\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Bytes
 * @property 'VMDK'|'RAW'|'VHD' $Format
 * @property string $ImportManifestUrl
 */
class DiskImageDetail extends Shape
{
    /**
     * @param array{
     *     Bytes: int,
     *     Format: 'VMDK'|'RAW'|'VHD',
     *     ImportManifestUrl: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
