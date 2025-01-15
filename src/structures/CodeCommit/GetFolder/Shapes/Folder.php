<?php

namespace Sunaoka\Aws\Structures\CodeCommit\GetFolder\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $treeId
 * @property string|null $absolutePath
 * @property string|null $relativePath
 */
class Folder extends Shape
{
    /**
     * @param array{
     *     treeId?: string|null,
     *     absolutePath?: string|null,
     *     relativePath?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
