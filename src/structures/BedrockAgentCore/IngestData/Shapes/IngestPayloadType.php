<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\IngestData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Conversational|null $conversational
 * @property MemoryJsonData|null $json
 */
class IngestPayloadType extends Shape
{
    /**
     * @param array{
     *     conversational?: Conversational|null,
     *     json?: MemoryJsonData|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
