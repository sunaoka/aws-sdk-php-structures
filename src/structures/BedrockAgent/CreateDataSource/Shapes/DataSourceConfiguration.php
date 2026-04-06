<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ConfluenceDataSourceConfiguration|null $confluenceConfiguration
 * @property S3DataSourceConfiguration|null $s3Configuration
 * @property SalesforceDataSourceConfiguration|null $salesforceConfiguration
 * @property SharePointDataSourceConfiguration|null $sharePointConfiguration
 * @property 'S3'|'WEB'|'CONFLUENCE'|'SALESFORCE'|'SHAREPOINT'|'CUSTOM'|'REDSHIFT_METADATA' $type
 * @property WebDataSourceConfiguration|null $webConfiguration
 */
class DataSourceConfiguration extends Shape
{
    /**
     * @param array{
     *     confluenceConfiguration?: ConfluenceDataSourceConfiguration|null,
     *     s3Configuration?: S3DataSourceConfiguration|null,
     *     salesforceConfiguration?: SalesforceDataSourceConfiguration|null,
     *     sharePointConfiguration?: SharePointDataSourceConfiguration|null,
     *     type: 'S3'|'WEB'|'CONFLUENCE'|'SALESFORCE'|'SHAREPOINT'|'CUSTOM'|'REDSHIFT_METADATA',
     *     webConfiguration?: WebDataSourceConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
