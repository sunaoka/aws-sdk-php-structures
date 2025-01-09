<?php

namespace Sunaoka\Aws\Structures\Ec2\ImportInstance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Checksum
 * @property 'VMDK'|'RAW'|'VHD' $Format
 * @property string $ImportManifestUrl
 * @property int $Size
 */
class DiskImageDescription extends Shape
{
    /**
     * @param array{
     *     Checksum?: string,
     *     Format?: 'VMDK'|'RAW'|'VHD',
     *     ImportManifestUrl?: string,
     *     Size?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
