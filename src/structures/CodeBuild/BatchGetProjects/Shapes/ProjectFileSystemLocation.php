<?php

namespace Sunaoka\Aws\Structures\CodeBuild\BatchGetProjects\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EFS'|null $type
 * @property string|null $location
 * @property string|null $mountPoint
 * @property string|null $identifier
 * @property string|null $mountOptions
 */
class ProjectFileSystemLocation extends Shape
{
    /**
     * @param array{
     *     type?: 'EFS'|null,
     *     location?: string|null,
     *     mountPoint?: string|null,
     *     identifier?: string|null,
     *     mountOptions?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
