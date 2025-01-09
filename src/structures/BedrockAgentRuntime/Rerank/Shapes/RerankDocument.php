<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\Rerank\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Document $jsonDocument
 * @property RerankTextDocument $textDocument
 * @property 'TEXT'|'JSON' $type
 */
class RerankDocument extends Shape
{
    /**
     * @param array{
     *     jsonDocument?: Document,
     *     textDocument?: RerankTextDocument,
     *     type: 'TEXT'|'JSON'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
