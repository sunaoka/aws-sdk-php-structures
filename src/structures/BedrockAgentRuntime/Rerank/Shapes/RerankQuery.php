<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\Rerank\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RerankTextDocument $textQuery
 * @property 'TEXT' $type
 */
class RerankQuery extends Shape
{
    /**
     * @param array{
     *     textQuery: RerankTextDocument,
     *     type: 'TEXT'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
