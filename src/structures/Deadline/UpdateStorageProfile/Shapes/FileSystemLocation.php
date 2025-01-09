<?php

namespace Sunaoka\Aws\Structures\Deadline\UpdateStorageProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $path
 * @property 'SHARED'|'LOCAL' $type
 */
class FileSystemLocation extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     path: string,
     *     type: 'SHARED'|'LOCAL'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
