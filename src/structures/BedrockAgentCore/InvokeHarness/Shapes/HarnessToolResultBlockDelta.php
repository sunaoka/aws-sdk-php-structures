<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\InvokeHarness\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $text
 * @property SensitiveJson|null $json
 */
class HarnessToolResultBlockDelta extends Shape
{
    /**
     * @param array{
     *     text?: string|null,
     *     json?: SensitiveJson|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
