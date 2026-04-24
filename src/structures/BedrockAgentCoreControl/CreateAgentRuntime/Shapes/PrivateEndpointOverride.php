<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateAgentRuntime\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $domain
 * @property PrivateEndpoint $privateEndpoint
 */
class PrivateEndpointOverride extends Shape
{
    /**
     * @param array{
     *     domain: string,
     *     privateEndpoint: PrivateEndpoint
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
