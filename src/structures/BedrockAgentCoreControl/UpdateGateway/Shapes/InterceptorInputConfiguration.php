<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateGateway\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $passRequestHeaders
 */
class InterceptorInputConfiguration extends Shape
{
    /**
     * @param array{passRequestHeaders: bool} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
