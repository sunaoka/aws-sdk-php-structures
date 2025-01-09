<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListAppImageConfigs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FileSystemConfig $FileSystemConfig
 * @property ContainerConfig $ContainerConfig
 */
class CodeEditorAppImageConfig extends Shape
{
    /**
     * @param array{
     *     FileSystemConfig?: FileSystemConfig,
     *     ContainerConfig?: ContainerConfig
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
