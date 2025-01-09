<?php

namespace Sunaoka\Aws\Structures\Transfer\CreateWorkflow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3InputFileLocation $S3FileLocation
 * @property EfsFileLocation $EfsFileLocation
 */
class InputFileLocation extends Shape
{
    /**
     * @param array{
     *     S3FileLocation?: S3InputFileLocation,
     *     EfsFileLocation?: EfsFileLocation
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
