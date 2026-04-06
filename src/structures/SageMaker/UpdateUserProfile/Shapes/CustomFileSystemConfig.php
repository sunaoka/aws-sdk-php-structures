<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateUserProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EFSFileSystemConfig|null $EFSFileSystemConfig
 * @property FSxLustreFileSystemConfig|null $FSxLustreFileSystemConfig
 * @property S3FileSystemConfig|null $S3FileSystemConfig
 */
class CustomFileSystemConfig extends Shape
{
    /**
     * @param array{
     *     EFSFileSystemConfig?: EFSFileSystemConfig|null,
     *     FSxLustreFileSystemConfig?: FSxLustreFileSystemConfig|null,
     *     S3FileSystemConfig?: S3FileSystemConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
