<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\Rerank\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'TEXT'|'JSON' $type
 * @property RerankTextDocument|null $textDocument
 * @property Document|null $jsonDocument
 */
class RerankDocument extends Shape
{
    /**
     * @param array{
     *     type: 'TEXT'|'JSON',
     *     textDocument?: RerankTextDocument|null,
     *     jsonDocument?: Document|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
