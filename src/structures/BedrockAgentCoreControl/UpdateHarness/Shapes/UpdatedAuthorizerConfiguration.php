<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateHarness\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AuthorizerConfiguration|null $optionalValue
 */
class UpdatedAuthorizerConfiguration extends Shape
{
    /**
     * @param array{optionalValue?: AuthorizerConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
