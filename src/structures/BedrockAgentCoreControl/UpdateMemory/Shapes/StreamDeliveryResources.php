<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateMemory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<StreamDeliveryResource> $resources
 */
class StreamDeliveryResources extends Shape
{
    /**
     * @param array{resources: list<StreamDeliveryResource>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
