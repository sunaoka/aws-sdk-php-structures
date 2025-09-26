<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\Rerank\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'TEXT' $type
 * @property RerankTextDocument $textQuery
 */
class RerankQuery extends Shape
{
    /**
     * @param array{
     *     type: 'TEXT',
     *     textQuery: RerankTextDocument
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
