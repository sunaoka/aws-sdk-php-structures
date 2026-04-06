<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\IngestKnowledgeBaseDocuments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $dataSourceId
 * @property DocumentIdentifier $identifier
 * @property string $knowledgeBaseId
 * @property 'INDEXED'|'PARTIALLY_INDEXED'|'PENDING'|'FAILED'|'METADATA_PARTIALLY_INDEXED'|'METADATA_UPDATE_FAILED'|'IGNORED'|'NOT_FOUND'|'STARTING'|'IN_PROGRESS'|'DELETING'|'DELETE_IN_PROGRESS' $status
 * @property string|null $statusReason
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class KnowledgeBaseDocumentDetail extends Shape
{
    /**
     * @param array{
     *     dataSourceId: string,
     *     identifier: DocumentIdentifier,
     *     knowledgeBaseId: string,
     *     status: 'INDEXED'|'PARTIALLY_INDEXED'|'PENDING'|'FAILED'|'METADATA_PARTIALLY_INDEXED'|'METADATA_UPDATE_FAILED'|'IGNORED'|'NOT_FOUND'|'STARTING'|'IN_PROGRESS'|'DELETING'|'DELETE_IN_PROGRESS',
     *     statusReason?: string|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
