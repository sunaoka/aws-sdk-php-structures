<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\Retrieve\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $byteContent
 * @property list<RetrievalResultContentColumn> $row
 * @property string $text
 * @property 'TEXT'|'IMAGE'|'ROW' $type
 */
class RetrievalResultContent extends Shape
{
    /**
     * @param array{
     *     byteContent?: string,
     *     row?: list<RetrievalResultContentColumn>,
     *     text?: string,
     *     type?: 'TEXT'|'IMAGE'|'ROW'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
