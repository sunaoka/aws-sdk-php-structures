<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListApps\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DomainId
 * @property string|null $UserProfileName
 * @property string|null $SpaceName
 * @property 'JupyterServer'|'KernelGateway'|'DetailedProfiler'|'TensorBoard'|'CodeEditor'|'JupyterLab'|'RStudioServerPro'|'RSessionGateway'|'Canvas'|null $AppType
 * @property string|null $AppName
 * @property 'Deleted'|'Deleting'|'Failed'|'InService'|'Pending'|null $Status
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property ResourceSpec|null $ResourceSpec
 */
class AppDetails extends Shape
{
    /**
     * @param array{
     *     DomainId?: string|null,
     *     UserProfileName?: string|null,
     *     SpaceName?: string|null,
     *     AppType?: 'JupyterServer'|'KernelGateway'|'DetailedProfiler'|'TensorBoard'|'CodeEditor'|'JupyterLab'|'RStudioServerPro'|'RSessionGateway'|'Canvas'|null,
     *     AppName?: string|null,
     *     Status?: 'Deleted'|'Deleting'|'Failed'|'InService'|'Pending'|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     ResourceSpec?: ResourceSpec|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
