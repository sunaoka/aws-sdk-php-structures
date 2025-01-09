<?php

namespace Sunaoka\Aws\Structures\Ec2\ImportVolume\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'VMDK'|'RAW'|'VHD' $Format
 * @property int $Bytes
 * @property string $ImportManifestUrl
 */
class DiskImageDetail extends Shape
{
    /**
     * @param array{
     *     Format: 'VMDK'|'RAW'|'VHD',
     *     Bytes: int,
     *     ImportManifestUrl: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
