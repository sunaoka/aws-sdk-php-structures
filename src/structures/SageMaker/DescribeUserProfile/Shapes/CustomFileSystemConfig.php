<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeUserProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EFSFileSystemConfig|null $EFSFileSystemConfig
 * @property FSxLustreFileSystemConfig|null $FSxLustreFileSystemConfig
 */
class CustomFileSystemConfig extends Shape
{
    /**
     * @param array{
     *     EFSFileSystemConfig?: EFSFileSystemConfig|null,
     *     FSxLustreFileSystemConfig?: FSxLustreFileSystemConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
