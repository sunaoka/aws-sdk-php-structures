<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeInstanceTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $TotalSizeInGB
 * @property list<DiskInfo>|null $Disks
 * @property 'unsupported'|'supported'|'required'|null $NvmeSupport
 * @property 'unsupported'|'required'|null $EncryptionSupport
 */
class InstanceStorageInfo extends Shape
{
    /**
     * @param array{
     *     TotalSizeInGB?: int|null,
     *     Disks?: list<DiskInfo>|null,
     *     NvmeSupport?: 'unsupported'|'supported'|'required'|null,
     *     EncryptionSupport?: 'unsupported'|'required'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
