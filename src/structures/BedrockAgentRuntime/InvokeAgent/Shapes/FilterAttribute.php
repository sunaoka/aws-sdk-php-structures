<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $key
 * @property FilterValue $value
 */
class FilterAttribute extends Shape
{
    /**
     * @param array{
     *     key: string,
     *     value: FilterValue
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
