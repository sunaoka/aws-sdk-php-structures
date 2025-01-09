<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListApps\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DomainId
 * @property string $UserProfileName
 * @property string $SpaceName
 * @property 'JupyterServer'|'KernelGateway'|'DetailedProfiler'|'TensorBoard'|'CodeEditor'|'JupyterLab'|'RStudioServerPro'|'RSessionGateway'|'Canvas' $AppType
 * @property string $AppName
 * @property 'Deleted'|'Deleting'|'Failed'|'InService'|'Pending' $Status
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property ResourceSpec $ResourceSpec
 */
class AppDetails extends Shape
{
    /**
     * @param array{
     *     DomainId?: string,
     *     UserProfileName?: string,
     *     SpaceName?: string,
     *     AppType?: 'JupyterServer'|'KernelGateway'|'DetailedProfiler'|'TensorBoard'|'CodeEditor'|'JupyterLab'|'RStudioServerPro'|'RSessionGateway'|'Canvas',
     *     AppName?: string,
     *     Status?: 'Deleted'|'Deleting'|'Failed'|'InService'|'Pending',
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     ResourceSpec?: ResourceSpec
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
