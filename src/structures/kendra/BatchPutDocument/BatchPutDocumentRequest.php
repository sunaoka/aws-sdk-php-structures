<?php

namespace Sunaoka\Aws\Structures\kendra\BatchPutDocument;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IndexId
 * @property string $RoleArn
 * @property list<Shapes\Document> $Documents
 * @property Shapes\CustomDocumentEnrichmentConfiguration $CustomDocumentEnrichmentConfiguration
 */
class BatchPutDocumentRequest extends Request
{
    /**
     * @param array{
     *     IndexId: string,
     *     RoleArn?: string,
     *     Documents: list<Shapes\Document>,
     *     CustomDocumentEnrichmentConfiguration?: Shapes\CustomDocumentEnrichmentConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
