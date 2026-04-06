<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\Converse\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Message|null $message
 */
class ConverseOutput extends Shape
{
    /**
     * @param array{message?: Message|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
