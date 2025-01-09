<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateApp;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainId
 * @property string $UserProfileName
 * @property string $SpaceName
 * @property 'JupyterServer'|'KernelGateway'|'DetailedProfiler'|'TensorBoard'|'CodeEditor'|'JupyterLab'|'RStudioServerPro'|'RSessionGateway'|'Canvas' $AppType
 * @property string $AppName
 * @property list<Shapes\Tag> $Tags
 * @property Shapes\ResourceSpec $ResourceSpec
 */
class CreateAppRequest extends Request
{
    /**
     * @param array{
     *     DomainId: string,
     *     UserProfileName?: string,
     *     SpaceName?: string,
     *     AppType: 'JupyterServer'|'KernelGateway'|'DetailedProfiler'|'TensorBoard'|'CodeEditor'|'JupyterLab'|'RStudioServerPro'|'RSessionGateway'|'Canvas',
     *     AppName: string,
     *     Tags?: list<Shapes\Tag>,
     *     ResourceSpec?: Shapes\ResourceSpec
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
