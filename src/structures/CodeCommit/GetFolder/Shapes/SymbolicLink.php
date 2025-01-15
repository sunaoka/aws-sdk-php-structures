<?php

namespace Sunaoka\Aws\Structures\CodeCommit\GetFolder\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $blobId
 * @property string|null $absolutePath
 * @property string|null $relativePath
 * @property 'EXECUTABLE'|'NORMAL'|'SYMLINK'|null $fileMode
 */
class SymbolicLink extends Shape
{
    /**
     * @param array{
     *     blobId?: string|null,
     *     absolutePath?: string|null,
     *     relativePath?: string|null,
     *     fileMode?: 'EXECUTABLE'|'NORMAL'|'SYMLINK'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
