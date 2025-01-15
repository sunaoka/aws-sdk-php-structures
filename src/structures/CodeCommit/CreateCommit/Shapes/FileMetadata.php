<?php

namespace Sunaoka\Aws\Structures\CodeCommit\CreateCommit\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $absolutePath
 * @property string|null $blobId
 * @property 'EXECUTABLE'|'NORMAL'|'SYMLINK'|null $fileMode
 */
class FileMetadata extends Shape
{
    /**
     * @param array{
     *     absolutePath?: string|null,
     *     blobId?: string|null,
     *     fileMode?: 'EXECUTABLE'|'NORMAL'|'SYMLINK'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
