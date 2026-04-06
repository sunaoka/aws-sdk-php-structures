<?php

namespace Sunaoka\Aws\Structures\QBusiness\BatchPutDocument;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 * @property string $indexId
 * @property list<Shapes\Document> $documents
 * @property string|null $roleArn
 * @property string|null $dataSourceSyncId
 */
class BatchPutDocumentRequest extends Request
{
    /**
     * @param array{
     *     applicationId: string,
     *     indexId: string,
     *     documents: list<Shapes\Document>,
     *     roleArn?: string|null,
     *     dataSourceSyncId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
