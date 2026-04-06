<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\RetrieveAndGenerateStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $byteContent
 * @property list<RetrievalResultContentColumn>|null $row
 * @property string|null $text
 * @property 'TEXT'|'IMAGE'|'ROW'|null $type
 */
class RetrievalResultContent extends Shape
{
    /**
     * @param array{
     *     byteContent?: string|null,
     *     row?: list<RetrievalResultContentColumn>|null,
     *     text?: string|null,
     *     type?: 'TEXT'|'IMAGE'|'ROW'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
