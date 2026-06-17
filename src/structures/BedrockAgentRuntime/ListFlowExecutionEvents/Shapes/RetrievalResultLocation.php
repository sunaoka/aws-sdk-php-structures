<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\ListFlowExecutionEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RetrievalResultConfluenceLocation|null $confluenceLocation
 * @property RetrievalResultCustomDocumentLocation|null $customDocumentLocation
 * @property RetrievalResultGoogleDriveLocation|null $googleDriveLocation
 * @property RetrievalResultKendraDocumentLocation|null $kendraDocumentLocation
 * @property RetrievalResultOneDriveLocation|null $oneDriveLocation
 * @property RetrievalResultS3Location|null $s3Location
 * @property RetrievalResultSalesforceLocation|null $salesforceLocation
 * @property RetrievalResultSharePointLocation|null $sharePointLocation
 * @property RetrievalResultSqlLocation|null $sqlLocation
 * @property 'S3'|'WEB'|'CONFLUENCE'|'SALESFORCE'|'SHAREPOINT'|'CUSTOM'|'KENDRA'|'SQL'|'ONEDRIVE'|'GOOGLEDRIVE' $type
 * @property RetrievalResultWebLocation|null $webLocation
 */
class RetrievalResultLocation extends Shape
{
    /**
     * @param array{
     *     confluenceLocation?: RetrievalResultConfluenceLocation|null,
     *     customDocumentLocation?: RetrievalResultCustomDocumentLocation|null,
     *     googleDriveLocation?: RetrievalResultGoogleDriveLocation|null,
     *     kendraDocumentLocation?: RetrievalResultKendraDocumentLocation|null,
     *     oneDriveLocation?: RetrievalResultOneDriveLocation|null,
     *     s3Location?: RetrievalResultS3Location|null,
     *     salesforceLocation?: RetrievalResultSalesforceLocation|null,
     *     sharePointLocation?: RetrievalResultSharePointLocation|null,
     *     sqlLocation?: RetrievalResultSqlLocation|null,
     *     type: 'S3'|'WEB'|'CONFLUENCE'|'SALESFORCE'|'SHAREPOINT'|'CUSTOM'|'KENDRA'|'SQL'|'ONEDRIVE'|'GOOGLEDRIVE',
     *     webLocation?: RetrievalResultWebLocation|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
