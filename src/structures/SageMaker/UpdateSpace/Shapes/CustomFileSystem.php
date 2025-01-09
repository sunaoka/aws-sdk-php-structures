<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateSpace\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EFSFileSystem $EFSFileSystem
 * @property FSxLustreFileSystem $FSxLustreFileSystem
 */
class CustomFileSystem extends Shape
{
    /**
     * @param array{
     *     EFSFileSystem?: EFSFileSystem,
     *     FSxLustreFileSystem?: FSxLustreFileSystem
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
