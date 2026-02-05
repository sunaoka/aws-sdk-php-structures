<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\Converse\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OutputFormat|null $textFormat
 */
class OutputConfig extends Shape
{
    /**
     * @param array{textFormat?: OutputFormat|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
