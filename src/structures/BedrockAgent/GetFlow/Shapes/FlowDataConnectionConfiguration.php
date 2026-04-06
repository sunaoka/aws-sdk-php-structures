<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $sourceOutput
 * @property string $targetInput
 */
class FlowDataConnectionConfiguration extends Shape
{
    /**
     * @param array{
     *     sourceOutput: string,
     *     targetInput: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
