<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $rationale
 * @property bool|null $isValid
 */
class PreProcessingParsedResponse extends Shape
{
    /**
     * @param array{
     *     rationale?: string|null,
     *     isValid?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
