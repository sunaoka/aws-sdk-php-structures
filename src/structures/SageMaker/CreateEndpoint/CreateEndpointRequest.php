<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EndpointName
 * @property string $EndpointConfigName
 * @property Shapes\DeploymentConfig $DeploymentConfig
 * @property list<Shapes\Tag> $Tags
 */
class CreateEndpointRequest extends Request
{
    /**
     * @param array{
     *     EndpointName: string,
     *     EndpointConfigName: string,
     *     DeploymentConfig?: Shapes\DeploymentConfig,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
