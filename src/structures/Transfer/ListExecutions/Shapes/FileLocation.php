<?php

namespace Sunaoka\Aws\Structures\Transfer\ListExecutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3FileLocation $S3FileLocation
 * @property EfsFileLocation $EfsFileLocation
 */
class FileLocation extends Shape
{
    /**
     * @param array{
     *     S3FileLocation?: S3FileLocation,
     *     EfsFileLocation?: EfsFileLocation
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
