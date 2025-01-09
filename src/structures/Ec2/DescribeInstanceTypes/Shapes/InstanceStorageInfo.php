<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeInstanceTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $TotalSizeInGB
 * @property list<DiskInfo> $Disks
 * @property 'unsupported'|'supported'|'required' $NvmeSupport
 * @property 'unsupported'|'required' $EncryptionSupport
 */
class InstanceStorageInfo extends Shape
{
    /**
     * @param array{
     *     TotalSizeInGB?: int,
     *     Disks?: list<DiskInfo>,
     *     NvmeSupport?: 'unsupported'|'supported'|'required',
     *     EncryptionSupport?: 'unsupported'|'required'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
