<?php

namespace Sunaoka\Aws\Structures\CodeCommit\GetFolder\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $treeId
 * @property string $absolutePath
 * @property string $relativePath
 */
class Folder extends Shape
{
    /**
     * @param array{
     *     treeId?: string,
     *     absolutePath?: string,
     *     relativePath?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
