<?php

namespace Sunaoka\Aws\Structures\Transfer\DescribeWorkflow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3InputFileLocation|null $S3FileLocation
 * @property EfsFileLocation|null $EfsFileLocation
 */
class InputFileLocation extends Shape
{
    /**
     * @param array{
     *     S3FileLocation?: S3InputFileLocation|null,
     *     EfsFileLocation?: EfsFileLocation|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
