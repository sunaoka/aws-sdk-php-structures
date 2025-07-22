<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeSpace\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EFSFileSystem|null $EFSFileSystem
 * @property FSxLustreFileSystem|null $FSxLustreFileSystem
 * @property S3FileSystem|null $S3FileSystem
 */
class CustomFileSystem extends Shape
{
    /**
     * @param array{
     *     EFSFileSystem?: EFSFileSystem|null,
     *     FSxLustreFileSystem?: FSxLustreFileSystem|null,
     *     S3FileSystem?: S3FileSystem|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
