<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EndpointName
 * @property string $EndpointConfigName
 * @property bool $RetainAllVariantProperties
 * @property list<Shapes\VariantProperty> $ExcludeRetainedVariantProperties
 * @property Shapes\DeploymentConfig $DeploymentConfig
 * @property bool $RetainDeploymentConfig
 */
class UpdateEndpointRequest extends Request
{
    /**
     * @param array{
     *     EndpointName: string,
     *     EndpointConfigName: string,
     *     RetainAllVariantProperties?: bool,
     *     ExcludeRetainedVariantProperties?: list<Shapes\VariantProperty>,
     *     DeploymentConfig?: Shapes\DeploymentConfig,
     *     RetainDeploymentConfig?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
