<?php

namespace Sunaoka\Aws\Structures\CodeCommit\CreateCommit\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $absolutePath
 * @property string $blobId
 * @property 'EXECUTABLE'|'NORMAL'|'SYMLINK' $fileMode
 */
class FileMetadata extends Shape
{
    /**
     * @param array{
     *     absolutePath?: string,
     *     blobId?: string,
     *     fileMode?: 'EXECUTABLE'|'NORMAL'|'SYMLINK'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
