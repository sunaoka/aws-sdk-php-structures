<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\Rerank\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Document|null $jsonDocument
 * @property RerankTextDocument|null $textDocument
 * @property 'TEXT'|'JSON' $type
 */
class RerankDocument extends Shape
{
    /**
     * @param array{
     *     jsonDocument?: Document|null,
     *     textDocument?: RerankTextDocument|null,
     *     type: 'TEXT'|'JSON'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
