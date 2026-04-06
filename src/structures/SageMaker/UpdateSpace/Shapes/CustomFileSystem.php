<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateSpace\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EFSFileSystem|null $EFSFileSystem
 * @property FSxLustreFileSystem|null $FSxLustreFileSystem
 */
class CustomFileSystem extends Shape
{
    /**
     * @param array{
     *     EFSFileSystem?: EFSFileSystem|null,
     *     FSxLustreFileSystem?: FSxLustreFileSystem|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
