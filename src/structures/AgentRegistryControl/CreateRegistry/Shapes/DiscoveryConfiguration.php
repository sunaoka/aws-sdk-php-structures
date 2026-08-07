<?php

namespace Sunaoka\Aws\Structures\AgentRegistryControl\CreateRegistry\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AuthorizerConfiguration|null $authorizerConfiguration
 * @property 'CUSTOM_JWT'|'AWS_IAM'|null $authorizerType
 */
class DiscoveryConfiguration extends Shape
{
    /**
     * @param array{
     *     authorizerConfiguration?: AuthorizerConfiguration|null,
     *     authorizerType?: 'CUSTOM_JWT'|'AWS_IAM'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
