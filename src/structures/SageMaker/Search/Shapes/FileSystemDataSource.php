<?php

namespace Sunaoka\Aws\Structures\SageMaker\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FileSystemId
 * @property 'rw'|'ro' $FileSystemAccessMode
 * @property 'EFS'|'FSxLustre' $FileSystemType
 * @property string $DirectoryPath
 */
class FileSystemDataSource extends Shape
{
    /**
     * @param array{
     *     FileSystemId: string,
     *     FileSystemAccessMode: 'rw'|'ro',
     *     FileSystemType: 'EFS'|'FSxLustre',
     *     DirectoryPath: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
