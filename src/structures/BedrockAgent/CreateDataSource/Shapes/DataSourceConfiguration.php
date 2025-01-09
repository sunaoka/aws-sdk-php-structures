<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ConfluenceDataSourceConfiguration $confluenceConfiguration
 * @property S3DataSourceConfiguration $s3Configuration
 * @property SalesforceDataSourceConfiguration $salesforceConfiguration
 * @property SharePointDataSourceConfiguration $sharePointConfiguration
 * @property 'S3'|'WEB'|'CONFLUENCE'|'SALESFORCE'|'SHAREPOINT'|'CUSTOM'|'REDSHIFT_METADATA' $type
 * @property WebDataSourceConfiguration $webConfiguration
 */
class DataSourceConfiguration extends Shape
{
    /**
     * @param array{
     *     confluenceConfiguration?: ConfluenceDataSourceConfiguration,
     *     s3Configuration?: S3DataSourceConfiguration,
     *     salesforceConfiguration?: SalesforceDataSourceConfiguration,
     *     sharePointConfiguration?: SharePointDataSourceConfiguration,
     *     type: 'S3'|'WEB'|'CONFLUENCE'|'SALESFORCE'|'SHAREPOINT'|'CUSTOM'|'REDSHIFT_METADATA',
     *     webConfiguration?: WebDataSourceConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
