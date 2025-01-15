<?php

namespace Sunaoka\Aws\Structures\Bedrock\CreateMarketplaceModelEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SageMakerEndpoint|null $sageMaker
 */
class EndpointConfig extends Shape
{
    /**
     * @param array{sageMaker?: SageMakerEndpoint|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
