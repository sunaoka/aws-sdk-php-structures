<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetGateway\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<InterceptorPayloadExclusionSelector> $exclude
 */
class InterceptorPayloadFilter extends Shape
{
    /**
     * @param array{exclude: list<InterceptorPayloadExclusionSelector>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
