<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RetrievalResultConfluenceLocation $confluenceLocation
 * @property RetrievalResultCustomDocumentLocation $customDocumentLocation
 * @property RetrievalResultKendraDocumentLocation $kendraDocumentLocation
 * @property RetrievalResultS3Location $s3Location
 * @property RetrievalResultSalesforceLocation $salesforceLocation
 * @property RetrievalResultSharePointLocation $sharePointLocation
 * @property RetrievalResultSqlLocation $sqlLocation
 * @property 'S3'|'WEB'|'CONFLUENCE'|'SALESFORCE'|'SHAREPOINT'|'CUSTOM'|'KENDRA'|'SQL' $type
 * @property RetrievalResultWebLocation $webLocation
 */
class RetrievalResultLocation extends Shape
{
    /**
     * @param array{
     *     confluenceLocation?: RetrievalResultConfluenceLocation,
     *     customDocumentLocation?: RetrievalResultCustomDocumentLocation,
     *     kendraDocumentLocation?: RetrievalResultKendraDocumentLocation,
     *     s3Location?: RetrievalResultS3Location,
     *     salesforceLocation?: RetrievalResultSalesforceLocation,
     *     sharePointLocation?: RetrievalResultSharePointLocation,
     *     sqlLocation?: RetrievalResultSqlLocation,
     *     type: 'S3'|'WEB'|'CONFLUENCE'|'SALESFORCE'|'SHAREPOINT'|'CUSTOM'|'KENDRA'|'SQL',
     *     webLocation?: RetrievalResultWebLocation
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
