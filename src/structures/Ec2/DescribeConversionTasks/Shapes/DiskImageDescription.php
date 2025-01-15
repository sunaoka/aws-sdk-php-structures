<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeConversionTasks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Checksum
 * @property 'VMDK'|'RAW'|'VHD'|null $Format
 * @property string|null $ImportManifestUrl
 * @property int|null $Size
 */
class DiskImageDescription extends Shape
{
    /**
     * @param array{
     *     Checksum?: string|null,
     *     Format?: 'VMDK'|'RAW'|'VHD'|null,
     *     ImportManifestUrl?: string|null,
     *     Size?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
