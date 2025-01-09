<?php

namespace Sunaoka\Aws\Structures\Bedrock\UpdateMarketplaceModelEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SageMakerEndpoint $sageMaker
 */
class EndpointConfig extends Shape
{
    /**
     * @param array{sageMaker?: SageMakerEndpoint} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
