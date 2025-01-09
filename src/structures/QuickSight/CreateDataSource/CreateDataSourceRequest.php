<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDataSource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $DataSourceId
 * @property string $Name
 * @property 'ADOBE_ANALYTICS'|'AMAZON_ELASTICSEARCH'|'ATHENA'|'AURORA'|'AURORA_POSTGRESQL'|'AWS_IOT_ANALYTICS'|'GITHUB'|'JIRA'|'MARIADB'|'MYSQL'|'ORACLE'|'POSTGRESQL'|'PRESTO'|'REDSHIFT'|'S3'|'SALESFORCE'|'SERVICENOW'|'SNOWFLAKE'|'SPARK'|'SQLSERVER'|'TERADATA'|'TWITTER'|'TIMESTREAM'|'AMAZON_OPENSEARCH'|'EXASOL'|'DATABRICKS'|'STARBURST'|'TRINO'|'BIGQUERY' $Type
 * @property Shapes\DataSourceParameters $DataSourceParameters
 * @property Shapes\DataSourceCredentials $Credentials
 * @property list<Shapes\ResourcePermission> $Permissions
 * @property Shapes\VpcConnectionProperties $VpcConnectionProperties
 * @property Shapes\SslProperties $SslProperties
 * @property list<Shapes\Tag> $Tags
 * @property list<string> $FolderArns
 */
class CreateDataSourceRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     DataSourceId: string,
     *     Name: string,
     *     Type: 'ADOBE_ANALYTICS'|'AMAZON_ELASTICSEARCH'|'ATHENA'|'AURORA'|'AURORA_POSTGRESQL'|'AWS_IOT_ANALYTICS'|'GITHUB'|'JIRA'|'MARIADB'|'MYSQL'|'ORACLE'|'POSTGRESQL'|'PRESTO'|'REDSHIFT'|'S3'|'SALESFORCE'|'SERVICENOW'|'SNOWFLAKE'|'SPARK'|'SQLSERVER'|'TERADATA'|'TWITTER'|'TIMESTREAM'|'AMAZON_OPENSEARCH'|'EXASOL'|'DATABRICKS'|'STARBURST'|'TRINO'|'BIGQUERY',
     *     DataSourceParameters?: Shapes\DataSourceParameters,
     *     Credentials?: Shapes\DataSourceCredentials,
     *     Permissions?: list<Shapes\ResourcePermission>,
     *     VpcConnectionProperties?: Shapes\VpcConnectionProperties,
     *     SslProperties?: Shapes\SslProperties,
     *     Tags?: list<Shapes\Tag>,
     *     FolderArns?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
