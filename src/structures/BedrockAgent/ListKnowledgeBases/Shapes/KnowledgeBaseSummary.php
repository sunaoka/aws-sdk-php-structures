<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\ListKnowledgeBases\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $knowledgeBaseId
 * @property string $name
 * @property string|null $description
 * @property 'CREATING'|'ACTIVE'|'DELETING'|'UPDATING'|'FAILED'|'DELETE_UNSUCCESSFUL' $status
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class KnowledgeBaseSummary extends Shape
{
    /**
     * @param array{
     *     knowledgeBaseId: string,
     *     name: string,
     *     description?: string|null,
     *     status: 'CREATING'|'ACTIVE'|'DELETING'|'UPDATING'|'FAILED'|'DELETE_UNSUCCESSFUL',
     *     updatedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
