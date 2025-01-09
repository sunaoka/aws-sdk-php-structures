<?php

namespace Sunaoka\Aws\Structures\CodeCommit\GetFolder\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $blobId
 * @property string $absolutePath
 * @property string $relativePath
 * @property 'EXECUTABLE'|'NORMAL'|'SYMLINK' $fileMode
 */
class File extends Shape
{
    /**
     * @param array{
     *     blobId?: string,
     *     absolutePath?: string,
     *     relativePath?: string,
     *     fileMode?: 'EXECUTABLE'|'NORMAL'|'SYMLINK'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
