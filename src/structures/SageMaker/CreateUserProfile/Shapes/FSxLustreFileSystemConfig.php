<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateUserProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FileSystemId
 * @property string $FileSystemPath
 */
class FSxLustreFileSystemConfig extends Shape
{
    /**
     * @param array{
     *     FileSystemId: string,
     *     FileSystemPath?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
