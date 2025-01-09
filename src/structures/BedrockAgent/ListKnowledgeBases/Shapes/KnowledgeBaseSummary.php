<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\ListKnowledgeBases\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $description
 * @property string $knowledgeBaseId
 * @property string $name
 * @property 'CREATING'|'ACTIVE'|'DELETING'|'UPDATING'|'FAILED'|'DELETE_UNSUCCESSFUL' $status
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class KnowledgeBaseSummary extends Shape
{
    /**
     * @param array{
     *     description?: string,
     *     knowledgeBaseId: string,
     *     name: string,
     *     status: 'CREATING'|'ACTIVE'|'DELETING'|'UPDATING'|'FAILED'|'DELETE_UNSUCCESSFUL',
     *     updatedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
