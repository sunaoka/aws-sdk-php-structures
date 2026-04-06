<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateApp;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainId
 * @property string|null $UserProfileName
 * @property 'JupyterServer'|'KernelGateway'|'TensorBoard'|'RStudioServerPro'|'RSessionGateway' $AppType
 * @property string $AppName
 * @property list<Shapes\Tag>|null $Tags
 * @property Shapes\ResourceSpec|null $ResourceSpec
 * @property string|null $SpaceName
 */
class CreateAppRequest extends Request
{
    /**
     * @param array{
     *     DomainId: string,
     *     UserProfileName?: string|null,
     *     AppType: 'JupyterServer'|'KernelGateway'|'TensorBoard'|'RStudioServerPro'|'RSessionGateway',
     *     AppName: string,
     *     Tags?: list<Shapes\Tag>|null,
     *     ResourceSpec?: Shapes\ResourceSpec|null,
     *     SpaceName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
