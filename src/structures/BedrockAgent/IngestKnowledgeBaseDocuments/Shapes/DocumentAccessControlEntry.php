<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\IngestKnowledgeBaseDocuments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property 'USER' $type
 * @property 'ALLOW'|'DENY' $access
 */
class DocumentAccessControlEntry extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     type: 'USER',
     *     access: 'ALLOW'|'DENY'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
