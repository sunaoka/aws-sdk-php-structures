<?php

namespace Sunaoka\Aws\Structures\S3Files\GetAccessPoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $path
 * @property CreationPermissions|null $creationPermissions
 */
class RootDirectory extends Shape
{
    /**
     * @param array{
     *     path?: string|null,
     *     creationPermissions?: CreationPermissions|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
