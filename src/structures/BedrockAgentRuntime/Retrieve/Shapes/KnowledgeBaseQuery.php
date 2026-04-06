<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\Retrieve\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property InputImage|null $image
 * @property string|null $text
 * @property 'TEXT'|'IMAGE'|null $type
 */
class KnowledgeBaseQuery extends Shape
{
    /**
     * @param array{
     *     image?: InputImage|null,
     *     text?: string|null,
     *     type?: 'TEXT'|'IMAGE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
