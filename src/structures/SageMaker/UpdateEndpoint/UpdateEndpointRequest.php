<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EndpointName
 * @property string $EndpointConfigName
 * @property bool|null $RetainAllVariantProperties
 * @property list<Shapes\VariantProperty>|null $ExcludeRetainedVariantProperties
 * @property Shapes\DeploymentConfig|null $DeploymentConfig
 * @property bool|null $RetainDeploymentConfig
 */
class UpdateEndpointRequest extends Request
{
    /**
     * @param array{
     *     EndpointName: string,
     *     EndpointConfigName: string,
     *     RetainAllVariantProperties?: bool|null,
     *     ExcludeRetainedVariantProperties?: list<Shapes\VariantProperty>|null,
     *     DeploymentConfig?: Shapes\DeploymentConfig|null,
     *     RetainDeploymentConfig?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
