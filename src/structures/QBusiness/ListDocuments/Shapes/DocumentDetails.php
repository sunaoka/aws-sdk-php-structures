<?php

namespace Sunaoka\Aws\Structures\QBusiness\ListDocuments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $documentId
 * @property 'RECEIVED'|'PROCESSING'|'INDEXED'|'UPDATED'|'FAILED'|'DELETING'|'DELETED'|'DOCUMENT_FAILED_TO_INDEX'|null $status
 * @property ErrorDetail|null $error
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class DocumentDetails extends Shape
{
    /**
     * @param array{
     *     documentId?: string|null,
     *     status?: 'RECEIVED'|'PROCESSING'|'INDEXED'|'UPDATED'|'FAILED'|'DELETING'|'DELETED'|'DOCUMENT_FAILED_TO_INDEX'|null,
     *     error?: ErrorDetail|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
