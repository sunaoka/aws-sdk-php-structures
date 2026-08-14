<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\GetIngestedDocumentAcl\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property 'KNOWLEDGE_BASE'|'DATA_SOURCE' $type
 */
class DocumentAclUser extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     type: 'KNOWLEDGE_BASE'|'DATA_SOURCE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
