<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateUserProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EFSFileSystemConfig $EFSFileSystemConfig
 * @property FSxLustreFileSystemConfig $FSxLustreFileSystemConfig
 */
class CustomFileSystemConfig extends Shape
{
    /**
     * @param array{
     *     EFSFileSystemConfig?: EFSFileSystemConfig,
     *     FSxLustreFileSystemConfig?: FSxLustreFileSystemConfig
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
