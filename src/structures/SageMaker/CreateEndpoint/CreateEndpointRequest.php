<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EndpointName
 * @property string $EndpointConfigName
 * @property Shapes\DeploymentConfig|null $DeploymentConfig
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateEndpointRequest extends Request
{
    /**
     * @param array{
     *     EndpointName: string,
     *     EndpointConfigName: string,
     *     DeploymentConfig?: Shapes\DeploymentConfig|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
