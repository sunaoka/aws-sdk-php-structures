<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'S3'|'WEB'|'CONFLUENCE'|'SALESFORCE'|'SHAREPOINT'|'CUSTOM'|'KENDRA'|'SQL' $type
 * @property RetrievalResultS3Location|null $s3Location
 * @property RetrievalResultWebLocation|null $webLocation
 * @property RetrievalResultConfluenceLocation|null $confluenceLocation
 * @property RetrievalResultSalesforceLocation|null $salesforceLocation
 * @property RetrievalResultSharePointLocation|null $sharePointLocation
 * @property RetrievalResultCustomDocumentLocation|null $customDocumentLocation
 * @property RetrievalResultKendraDocumentLocation|null $kendraDocumentLocation
 * @property RetrievalResultSqlLocation|null $sqlLocation
 */
class RetrievalResultLocation extends Shape
{
    /**
     * @param array{
     *     type: 'S3'|'WEB'|'CONFLUENCE'|'SALESFORCE'|'SHAREPOINT'|'CUSTOM'|'KENDRA'|'SQL',
     *     s3Location?: RetrievalResultS3Location|null,
     *     webLocation?: RetrievalResultWebLocation|null,
     *     confluenceLocation?: RetrievalResultConfluenceLocation|null,
     *     salesforceLocation?: RetrievalResultSalesforceLocation|null,
     *     sharePointLocation?: RetrievalResultSharePointLocation|null,
     *     customDocumentLocation?: RetrievalResultCustomDocumentLocation|null,
     *     kendraDocumentLocation?: RetrievalResultKendraDocumentLocation|null,
     *     sqlLocation?: RetrievalResultSqlLocation|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
