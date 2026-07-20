<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\InvokeHarness\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $metadata
 */
class HarnessToolResultMetadataBlockDelta extends Shape
{
    /**
     * @param array{metadata: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
