<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\IngestKnowledgeBaseDocuments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $data
 */
class TextContentDoc extends Shape
{
    /**
     * @param array{data: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
