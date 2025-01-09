<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeInlineAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $data
 * @property string $mediaType
 */
class ByteContentFile extends Shape
{
    /**
     * @param array{
     *     data: string,
     *     mediaType: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
