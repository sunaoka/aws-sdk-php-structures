<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\InvokeWebSearch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $country
 */
class WebSearchUserLocation extends Shape
{
    /**
     * @param array{country?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
