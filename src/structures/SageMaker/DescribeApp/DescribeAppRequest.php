<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeApp;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainId
 * @property string|null $UserProfileName
 * @property 'JupyterServer'|'KernelGateway'|'TensorBoard'|'RStudioServerPro'|'RSessionGateway' $AppType
 * @property string $AppName
 * @property string|null $SpaceName
 */
class DescribeAppRequest extends Request
{
    /**
     * @param array{
     *     DomainId: string,
     *     UserProfileName?: string|null,
     *     AppType: 'JupyterServer'|'KernelGateway'|'TensorBoard'|'RStudioServerPro'|'RSessionGateway',
     *     AppName: string,
     *     SpaceName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
