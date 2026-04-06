<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\Rerank\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RerankDocument $inlineDocumentSource
 * @property 'INLINE' $type
 */
class RerankSource extends Shape
{
    /**
     * @param array{
     *     inlineDocumentSource: RerankDocument,
     *     type: 'INLINE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
