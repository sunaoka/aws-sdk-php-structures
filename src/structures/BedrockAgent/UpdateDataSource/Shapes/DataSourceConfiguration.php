<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\UpdateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'S3'|'WEB'|'CONFLUENCE'|'SALESFORCE'|'SHAREPOINT'|'CUSTOM'|'REDSHIFT_METADATA'|'MANAGED_KNOWLEDGE_BASE_CONNECTOR' $type
 * @property ManagedKnowledgeBaseConnectorConfiguration|null $managedKnowledgeBaseConnectorConfiguration
 * @property S3DataSourceConfiguration|null $s3Configuration
 * @property WebDataSourceConfiguration|null $webConfiguration
 * @property ConfluenceDataSourceConfiguration|null $confluenceConfiguration
 * @property SalesforceDataSourceConfiguration|null $salesforceConfiguration
 * @property SharePointDataSourceConfiguration|null $sharePointConfiguration
 */
class DataSourceConfiguration extends Shape
{
    /**
     * @param array{
     *     type: 'S3'|'WEB'|'CONFLUENCE'|'SALESFORCE'|'SHAREPOINT'|'CUSTOM'|'REDSHIFT_METADATA'|'MANAGED_KNOWLEDGE_BASE_CONNECTOR',
     *     managedKnowledgeBaseConnectorConfiguration?: ManagedKnowledgeBaseConnectorConfiguration|null,
     *     s3Configuration?: S3DataSourceConfiguration|null,
     *     webConfiguration?: WebDataSourceConfiguration|null,
     *     confluenceConfiguration?: ConfluenceDataSourceConfiguration|null,
     *     salesforceConfiguration?: SalesforceDataSourceConfiguration|null,
     *     sharePointConfiguration?: SharePointDataSourceConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
