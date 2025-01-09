<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListStudioLifecycleConfigs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $StudioLifecycleConfigArn
 * @property string $StudioLifecycleConfigName
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property 'JupyterServer'|'KernelGateway'|'CodeEditor'|'JupyterLab' $StudioLifecycleConfigAppType
 */
class StudioLifecycleConfigDetails extends Shape
{
    /**
     * @param array{
     *     StudioLifecycleConfigArn?: string,
     *     StudioLifecycleConfigName?: string,
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult,
     *     StudioLifecycleConfigAppType?: 'JupyterServer'|'KernelGateway'|'CodeEditor'|'JupyterLab'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
