<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\ListFlowExecutionEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'TEXT'|'IMAGE'|'ROW'|null $type
 * @property string|null $text
 * @property string|null $byteContent
 * @property list<RetrievalResultContentColumn>|null $row
 */
class RetrievalResultContent extends Shape
{
    /**
     * @param array{
     *     type?: 'TEXT'|'IMAGE'|'ROW'|null,
     *     text?: string|null,
     *     byteContent?: string|null,
     *     row?: list<RetrievalResultContentColumn>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
