<?php

namespace Sunaoka\Aws\Structures\QBusiness\BatchDeleteDocument;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 * @property string $indexId
 * @property list<Shapes\DeleteDocument> $documents
 * @property string|null $dataSourceSyncId
 */
class BatchDeleteDocumentRequest extends Request
{
    /**
     * @param array{
     *     applicationId: string,
     *     indexId: string,
     *     documents: list<Shapes\DeleteDocument>,
     *     dataSourceSyncId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
