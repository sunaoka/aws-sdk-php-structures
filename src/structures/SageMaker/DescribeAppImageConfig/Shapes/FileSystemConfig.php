<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeAppImageConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $MountPath
 * @property int<0, 65535>|null $DefaultUid
 * @property int<0, 65535>|null $DefaultGid
 */
class FileSystemConfig extends Shape
{
    /**
     * @param array{
     *     MountPath?: string|null,
     *     DefaultUid?: int<0, 65535>|null,
     *     DefaultGid?: int<0, 65535>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
