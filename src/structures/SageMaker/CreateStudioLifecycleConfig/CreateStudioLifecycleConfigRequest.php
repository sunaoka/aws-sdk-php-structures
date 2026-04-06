<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateStudioLifecycleConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StudioLifecycleConfigName
 * @property string $StudioLifecycleConfigContent
 * @property 'JupyterServer'|'KernelGateway' $StudioLifecycleConfigAppType
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateStudioLifecycleConfigRequest extends Request
{
    /**
     * @param array{
     *     StudioLifecycleConfigName: string,
     *     StudioLifecycleConfigContent: string,
     *     StudioLifecycleConfigAppType: 'JupyterServer'|'KernelGateway',
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
