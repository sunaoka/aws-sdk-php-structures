<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateStudioLifecycleConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StudioLifecycleConfigName
 * @property string $StudioLifecycleConfigContent
 * @property 'JupyterServer'|'KernelGateway'|'CodeEditor'|'JupyterLab' $StudioLifecycleConfigAppType
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateStudioLifecycleConfigRequest extends Request
{
    /**
     * @param array{
     *     StudioLifecycleConfigName: string,
     *     StudioLifecycleConfigContent: string,
     *     StudioLifecycleConfigAppType: 'JupyterServer'|'KernelGateway'|'CodeEditor'|'JupyterLab',
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
