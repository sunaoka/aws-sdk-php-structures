<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeAppImageConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MountPath
 * @property int<0, 65535> $DefaultUid
 * @property int<0, 65535> $DefaultGid
 */
class FileSystemConfig extends Shape
{
    /**
     * @param array{
     *     MountPath?: string,
     *     DefaultUid?: int<0, 65535>,
     *     DefaultGid?: int<0, 65535>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
