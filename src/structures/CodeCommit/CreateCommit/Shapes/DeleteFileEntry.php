<?php

namespace Sunaoka\Aws\Structures\CodeCommit\CreateCommit\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $filePath
 */
class DeleteFileEntry extends Shape
{
    /**
     * @param array{filePath: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
