<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDataSource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $DataSourceId
 * @property string $Name
 * @property 'ADOBE_ANALYTICS'|'AMAZON_ELASTICSEARCH'|'ATHENA'|'AURORA'|'AURORA_POSTGRESQL'|'AWS_IOT_ANALYTICS'|'GITHUB'|'JIRA'|'MARIADB'|'MYSQL'|'ORACLE'|'POSTGRESQL'|'PRESTO'|'REDSHIFT'|'S3'|'SALESFORCE'|'SERVICENOW'|'SNOWFLAKE'|'SPARK'|'SQLSERVER'|'TERADATA'|'TWITTER'|'TIMESTREAM'|'AMAZON_OPENSEARCH'|'EXASOL'|'DATABRICKS'|'STARBURST'|'TRINO'|'BIGQUERY'|'GOOGLESHEETS'|'GOOGLE_DRIVE'|'CONFLUENCE'|'SHAREPOINT'|'ONE_DRIVE'|'WEB_CRAWLER'|'S3_KNOWLEDGE_BASE'|'QBUSINESS' $Type
 * @property Shapes\DataSourceParameters|null $DataSourceParameters
 * @property Shapes\DataSourceCredentials|null $Credentials
 * @property list<Shapes\ResourcePermission>|null $Permissions
 * @property Shapes\VpcConnectionProperties|null $VpcConnectionProperties
 * @property Shapes\SslProperties|null $SslProperties
 * @property list<Shapes\Tag>|null $Tags
 * @property list<string>|null $FolderArns
 */
class CreateDataSourceRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     DataSourceId: string,
     *     Name: string,
     *     Type: 'ADOBE_ANALYTICS'|'AMAZON_ELASTICSEARCH'|'ATHENA'|'AURORA'|'AURORA_POSTGRESQL'|'AWS_IOT_ANALYTICS'|'GITHUB'|'JIRA'|'MARIADB'|'MYSQL'|'ORACLE'|'POSTGRESQL'|'PRESTO'|'REDSHIFT'|'S3'|'SALESFORCE'|'SERVICENOW'|'SNOWFLAKE'|'SPARK'|'SQLSERVER'|'TERADATA'|'TWITTER'|'TIMESTREAM'|'AMAZON_OPENSEARCH'|'EXASOL'|'DATABRICKS'|'STARBURST'|'TRINO'|'BIGQUERY'|'GOOGLESHEETS'|'GOOGLE_DRIVE'|'CONFLUENCE'|'SHAREPOINT'|'ONE_DRIVE'|'WEB_CRAWLER'|'S3_KNOWLEDGE_BASE'|'QBUSINESS',
     *     DataSourceParameters?: Shapes\DataSourceParameters|null,
     *     Credentials?: Shapes\DataSourceCredentials|null,
     *     Permissions?: list<Shapes\ResourcePermission>|null,
     *     VpcConnectionProperties?: Shapes\VpcConnectionProperties|null,
     *     SslProperties?: Shapes\SslProperties|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     FolderArns?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
