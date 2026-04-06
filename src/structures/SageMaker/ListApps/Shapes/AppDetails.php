<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListApps\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DomainId
 * @property string|null $UserProfileName
 * @property 'JupyterServer'|'KernelGateway'|'TensorBoard'|'RStudioServerPro'|'RSessionGateway'|null $AppType
 * @property string|null $AppName
 * @property 'Deleted'|'Deleting'|'Failed'|'InService'|'Pending'|null $Status
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property string|null $SpaceName
 */
class AppDetails extends Shape
{
    /**
     * @param array{
     *     DomainId?: string|null,
     *     UserProfileName?: string|null,
     *     AppType?: 'JupyterServer'|'KernelGateway'|'TensorBoard'|'RStudioServerPro'|'RSessionGateway'|null,
     *     AppName?: string|null,
     *     Status?: 'Deleted'|'Deleting'|'Failed'|'InService'|'Pending'|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     SpaceName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
