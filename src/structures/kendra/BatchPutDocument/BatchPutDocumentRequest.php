<?php

namespace Sunaoka\Aws\Structures\kendra\BatchPutDocument;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IndexId
 * @property string|null $RoleArn
 * @property list<Shapes\Document> $Documents
 * @property Shapes\CustomDocumentEnrichmentConfiguration|null $CustomDocumentEnrichmentConfiguration
 */
class BatchPutDocumentRequest extends Request
{
    /**
     * @param array{
     *     IndexId: string,
     *     RoleArn?: string|null,
     *     Documents: list<Shapes\Document>,
     *     CustomDocumentEnrichmentConfiguration?: Shapes\CustomDocumentEnrichmentConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
