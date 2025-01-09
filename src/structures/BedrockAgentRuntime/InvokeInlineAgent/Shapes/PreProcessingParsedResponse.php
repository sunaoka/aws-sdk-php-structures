<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeInlineAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $isValid
 * @property string $rationale
 */
class PreProcessingParsedResponse extends Shape
{
    /**
     * @param array{
     *     isValid?: bool,
     *     rationale?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
