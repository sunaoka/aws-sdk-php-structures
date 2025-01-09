<?php

namespace Sunaoka\Aws\Structures\CodeBuild\StartBuild\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EFS' $type
 * @property string $location
 * @property string $mountPoint
 * @property string $identifier
 * @property string $mountOptions
 */
class ProjectFileSystemLocation extends Shape
{
    /**
     * @param array{
     *     type?: 'EFS',
     *     location?: string,
     *     mountPoint?: string,
     *     identifier?: string,
     *     mountOptions?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
