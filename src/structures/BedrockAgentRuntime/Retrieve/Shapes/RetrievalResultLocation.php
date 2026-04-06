<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\Retrieve\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RetrievalResultConfluenceLocation|null $confluenceLocation
 * @property RetrievalResultS3Location|null $s3Location
 * @property RetrievalResultSalesforceLocation|null $salesforceLocation
 * @property RetrievalResultSharePointLocation|null $sharePointLocation
 * @property 'S3'|'WEB'|'CONFLUENCE'|'SALESFORCE'|'SHAREPOINT' $type
 * @property RetrievalResultWebLocation|null $webLocation
 */
class RetrievalResultLocation extends Shape
{
    /**
     * @param array{
     *     confluenceLocation?: RetrievalResultConfluenceLocation|null,
     *     s3Location?: RetrievalResultS3Location|null,
     *     salesforceLocation?: RetrievalResultSalesforceLocation|null,
     *     sharePointLocation?: RetrievalResultSharePointLocation|null,
     *     type: 'S3'|'WEB'|'CONFLUENCE'|'SALESFORCE'|'SHAREPOINT',
     *     webLocation?: RetrievalResultWebLocation|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
