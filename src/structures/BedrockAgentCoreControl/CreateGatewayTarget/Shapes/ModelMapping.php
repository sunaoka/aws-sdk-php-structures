<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateGatewayTarget\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ProviderPrefix|null $providerPrefix
 */
class ModelMapping extends Shape
{
    /**
     * @param array{providerPrefix?: ProviderPrefix|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
