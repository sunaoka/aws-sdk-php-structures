<?php

namespace Sunaoka\Aws\Structures\QBusiness\GetDocumentContent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 * @property string $indexId
 * @property string|null $dataSourceId
 * @property string $documentId
 * @property 'RAW'|'EXTRACTED'|null $outputFormat
 */
class GetDocumentContentRequest extends Request
{
    /**
     * @param array{
     *     applicationId: string,
     *     indexId: string,
     *     dataSourceId?: string|null,
     *     documentId: string,
     *     outputFormat?: 'RAW'|'EXTRACTED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
