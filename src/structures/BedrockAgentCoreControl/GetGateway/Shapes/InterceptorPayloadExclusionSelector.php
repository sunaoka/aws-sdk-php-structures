<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetGateway\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'RESPONSE_BODY'|null $field
 */
class InterceptorPayloadExclusionSelector extends Shape
{
    /**
     * @param array{field?: 'RESPONSE_BODY'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
