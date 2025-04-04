<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeAppImageConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FileSystemConfig|null $FileSystemConfig
 * @property ContainerConfig|null $ContainerConfig
 */
class CodeEditorAppImageConfig extends Shape
{
    /**
     * @param array{
     *     FileSystemConfig?: FileSystemConfig|null,
     *     ContainerConfig?: ContainerConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
