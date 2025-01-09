<?php

namespace Sunaoka\Aws\Structures\StorageGateway\ListLocalDisks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DiskId
 * @property string $DiskPath
 * @property string $DiskNode
 * @property string $DiskStatus
 * @property int $DiskSizeInBytes
 * @property string $DiskAllocationType
 * @property string $DiskAllocationResource
 * @property list<string> $DiskAttributeList
 */
class Disk extends Shape
{
    /**
     * @param array{
     *     DiskId?: string,
     *     DiskPath?: string,
     *     DiskNode?: string,
     *     DiskStatus?: string,
     *     DiskSizeInBytes?: int,
     *     DiskAllocationType?: string,
     *     DiskAllocationResource?: string,
     *     DiskAttributeList?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
