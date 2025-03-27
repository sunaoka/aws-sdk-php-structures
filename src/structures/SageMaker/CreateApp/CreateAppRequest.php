<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateApp;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainId
 * @property string|null $UserProfileName
 * @property string|null $SpaceName
 * @property 'JupyterServer'|'KernelGateway'|'DetailedProfiler'|'TensorBoard'|'CodeEditor'|'JupyterLab'|'RStudioServerPro'|'RSessionGateway'|'Canvas' $AppType
 * @property string $AppName
 * @property list<Shapes\Tag>|null $Tags
 * @property Shapes\ResourceSpec|null $ResourceSpec
 * @property bool|null $RecoveryMode
 */
class CreateAppRequest extends Request
{
    /**
     * @param array{
     *     DomainId: string,
     *     UserProfileName?: string|null,
     *     SpaceName?: string|null,
     *     AppType: 'JupyterServer'|'KernelGateway'|'DetailedProfiler'|'TensorBoard'|'CodeEditor'|'JupyterLab'|'RStudioServerPro'|'RSessionGateway'|'Canvas',
     *     AppName: string,
     *     Tags?: list<Shapes\Tag>|null,
     *     ResourceSpec?: Shapes\ResourceSpec|null,
     *     RecoveryMode?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
