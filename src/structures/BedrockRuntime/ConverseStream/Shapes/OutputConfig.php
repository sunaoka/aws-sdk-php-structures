<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\ConverseStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OutputFormat|null $textFormat
 * @property string|null $effort
 */
class OutputConfig extends Shape
{
    /**
     * @param array{
     *     textFormat?: OutputFormat|null,
     *     effort?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
