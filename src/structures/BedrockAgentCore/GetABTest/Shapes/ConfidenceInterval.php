<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\GetABTest\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $lower
 * @property double|null $upper
 */
class ConfidenceInterval extends Shape
{
    /**
     * @param array{
     *     lower?: double|null,
     *     upper?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
