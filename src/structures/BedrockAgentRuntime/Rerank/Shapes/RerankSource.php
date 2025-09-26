<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\Rerank\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'INLINE' $type
 * @property RerankDocument $inlineDocumentSource
 */
class RerankSource extends Shape
{
    /**
     * @param array{
     *     type: 'INLINE',
     *     inlineDocumentSource: RerankDocument
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
