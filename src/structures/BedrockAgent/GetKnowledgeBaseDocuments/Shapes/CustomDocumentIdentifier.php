<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetKnowledgeBaseDocuments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 */
class CustomDocumentIdentifier extends Shape
{
    /**
     * @param array{id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
