<?php

namespace Sunaoka\Aws\Structures\DataZone\StartNotebookSync\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $s3
 * @property S3FilesLocation|null $s3Files
 */
class SourceLocation extends Shape
{
    /**
     * @param array{
     *     s3?: string|null,
     *     s3Files?: S3FilesLocation|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
