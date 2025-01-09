<?php

namespace Sunaoka\Aws\Structures\SageMaker\DeleteApp;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainId
 * @property string $UserProfileName
 * @property string $SpaceName
 * @property 'JupyterServer'|'KernelGateway'|'DetailedProfiler'|'TensorBoard'|'CodeEditor'|'JupyterLab'|'RStudioServerPro'|'RSessionGateway'|'Canvas' $AppType
 * @property string $AppName
 */
class DeleteAppRequest extends Request
{
    /**
     * @param array{
     *     DomainId: string,
     *     UserProfileName?: string,
     *     SpaceName?: string,
     *     AppType: 'JupyterServer'|'KernelGateway'|'DetailedProfiler'|'TensorBoard'|'CodeEditor'|'JupyterLab'|'RStudioServerPro'|'RSessionGateway'|'Canvas',
     *     AppName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
