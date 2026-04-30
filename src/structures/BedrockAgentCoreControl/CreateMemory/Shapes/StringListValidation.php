<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateMemory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $allowedValues
 * @property int<1, 5>|null $maxItems
 */
class StringListValidation extends Shape
{
    /**
     * @param array{
     *     allowedValues?: list<string>|null,
     *     maxItems?: int<1, 5>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
