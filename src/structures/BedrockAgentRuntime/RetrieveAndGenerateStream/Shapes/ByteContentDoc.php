<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\RetrieveAndGenerateStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $contentType
 * @property string $data
 * @property string $identifier
 */
class ByteContentDoc extends Shape
{
    /**
     * @param array{
     *     contentType: string,
     *     data: string,
     *     identifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
