<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RetrievalResultConfluenceLocation|null $confluenceLocation
 * @property RetrievalResultCustomDocumentLocation|null $customDocumentLocation
 * @property RetrievalResultKendraDocumentLocation|null $kendraDocumentLocation
 * @property RetrievalResultS3Location|null $s3Location
 * @property RetrievalResultSalesforceLocation|null $salesforceLocation
 * @property RetrievalResultSharePointLocation|null $sharePointLocation
 * @property RetrievalResultSqlLocation|null $sqlLocation
 * @property 'S3'|'WEB'|'CONFLUENCE'|'SALESFORCE'|'SHAREPOINT'|'CUSTOM'|'KENDRA'|'SQL' $type
 * @property RetrievalResultWebLocation|null $webLocation
 */
class RetrievalResultLocation extends Shape
{
    /**
     * @param array{
     *     confluenceLocation?: RetrievalResultConfluenceLocation|null,
     *     customDocumentLocation?: RetrievalResultCustomDocumentLocation|null,
     *     kendraDocumentLocation?: RetrievalResultKendraDocumentLocation|null,
     *     s3Location?: RetrievalResultS3Location|null,
     *     salesforceLocation?: RetrievalResultSalesforceLocation|null,
     *     sharePointLocation?: RetrievalResultSharePointLocation|null,
     *     sqlLocation?: RetrievalResultSqlLocation|null,
     *     type: 'S3'|'WEB'|'CONFLUENCE'|'SALESFORCE'|'SHAREPOINT'|'CUSTOM'|'KENDRA'|'SQL',
     *     webLocation?: RetrievalResultWebLocation|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
