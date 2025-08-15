<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\ListKnowledgeBaseDocuments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $knowledgeBaseId
 * @property string $dataSourceId
 * @property 'INDEXED'|'PARTIALLY_INDEXED'|'PENDING'|'FAILED'|'METADATA_PARTIALLY_INDEXED'|'METADATA_UPDATE_FAILED'|'IGNORED'|'NOT_FOUND'|'STARTING'|'IN_PROGRESS'|'DELETING'|'DELETE_IN_PROGRESS' $status
 * @property DocumentIdentifier $identifier
 * @property string|null $statusReason
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class KnowledgeBaseDocumentDetail extends Shape
{
    /**
     * @param array{
     *     knowledgeBaseId: string,
     *     dataSourceId: string,
     *     status: 'INDEXED'|'PARTIALLY_INDEXED'|'PENDING'|'FAILED'|'METADATA_PARTIALLY_INDEXED'|'METADATA_UPDATE_FAILED'|'IGNORED'|'NOT_FOUND'|'STARTING'|'IN_PROGRESS'|'DELETING'|'DELETE_IN_PROGRESS',
     *     identifier: DocumentIdentifier,
     *     statusReason?: string|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
