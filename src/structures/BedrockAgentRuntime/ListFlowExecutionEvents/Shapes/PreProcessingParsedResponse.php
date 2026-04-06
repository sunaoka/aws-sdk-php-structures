<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\ListFlowExecutionEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $isValid
 * @property string|null $rationale
 */
class PreProcessingParsedResponse extends Shape
{
    /**
     * @param array{
     *     isValid?: bool|null,
     *     rationale?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
