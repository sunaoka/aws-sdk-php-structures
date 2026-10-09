<?php

namespace Sunaoka\Aws\Structures\DataZone\StartNotebookSync\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $bucket
 * @property list<S3File> $fileList
 */
class S3FilesLocation extends Shape
{
    /**
     * @param array{
     *     bucket: string,
     *     fileList: list<S3File>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
