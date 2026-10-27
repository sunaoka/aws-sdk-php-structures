<?php

namespace Sunaoka\Aws\Structures\Odb\CreateCloudVmCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $mountPoint
 * @property int|null $fileSystemSizeInGBs
 */
class FileSystemConfigurationDetails extends Shape
{
    /**
     * @param array{
     *     mountPoint?: string|null,
     *     fileSystemSizeInGBs?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
