<?php

namespace Sunaoka\Aws\Structures\StorageGateway\ListLocalDisks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DiskId
 * @property string|null $DiskPath
 * @property string|null $DiskNode
 * @property string|null $DiskStatus
 * @property int|null $DiskSizeInBytes
 * @property string|null $DiskAllocationType
 * @property string|null $DiskAllocationResource
 * @property list<string>|null $DiskAttributeList
 */
class Disk extends Shape
{
    /**
     * @param array{
     *     DiskId?: string|null,
     *     DiskPath?: string|null,
     *     DiskNode?: string|null,
     *     DiskStatus?: string|null,
     *     DiskSizeInBytes?: int|null,
     *     DiskAllocationType?: string|null,
     *     DiskAllocationResource?: string|null,
     *     DiskAttributeList?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
