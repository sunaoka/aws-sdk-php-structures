<?php

namespace Sunaoka\Aws\Structures\QBusiness\ListDocuments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $documentId
 * @property 'RECEIVED'|'PROCESSING'|'INDEXED'|'UPDATED'|'FAILED'|'DELETING'|'DELETED'|'DOCUMENT_FAILED_TO_INDEX' $status
 * @property ErrorDetail $error
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class DocumentDetails extends Shape
{
    /**
     * @param array{
     *     documentId?: string,
     *     status?: 'RECEIVED'|'PROCESSING'|'INDEXED'|'UPDATED'|'FAILED'|'DELETING'|'DELETED'|'DOCUMENT_FAILED_TO_INDEX',
     *     error?: ErrorDetail,
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     updatedAt?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
