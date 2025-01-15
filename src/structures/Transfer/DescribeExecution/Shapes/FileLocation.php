<?php

namespace Sunaoka\Aws\Structures\Transfer\DescribeExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3FileLocation|null $S3FileLocation
 * @property EfsFileLocation|null $EfsFileLocation
 */
class FileLocation extends Shape
{
    /**
     * @param array{
     *     S3FileLocation?: S3FileLocation|null,
     *     EfsFileLocation?: EfsFileLocation|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
