<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateAppImageConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MountPath
 * @property int $DefaultUid
 * @property int $DefaultGid
 */
class FileSystemConfig extends Shape
{
    /**
     * @param array{
     *     MountPath?: string,
     *     DefaultUid?: int,
     *     DefaultGid?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
