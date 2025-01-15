<?php

namespace Sunaoka\Aws\Structures\Lightsail\CreateContainerServiceDeployment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $serviceName
 * @property array<string, Shapes\Container>|null $containers
 * @property Shapes\EndpointRequest|null $publicEndpoint
 */
class CreateContainerServiceDeploymentRequest extends Request
{
    /**
     * @param array{
     *     serviceName: string,
     *     containers?: array<string, Shapes\Container>|null,
     *     publicEndpoint?: Shapes\EndpointRequest|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
