<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListStudioLifecycleConfigs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $StudioLifecycleConfigArn
 * @property string|null $StudioLifecycleConfigName
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 * @property 'JupyterServer'|'KernelGateway'|'CodeEditor'|'JupyterLab'|null $StudioLifecycleConfigAppType
 */
class StudioLifecycleConfigDetails extends Shape
{
    /**
     * @param array{
     *     StudioLifecycleConfigArn?: string|null,
     *     StudioLifecycleConfigName?: string|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult|null,
     *     StudioLifecycleConfigAppType?: 'JupyterServer'|'KernelGateway'|'CodeEditor'|'JupyterLab'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
