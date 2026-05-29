<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeOAuthClientApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $OAuthClientApplicationId
 * @property string|null $Name
 * @property 'TOKEN'|null $OAuthClientAuthenticationType
 * @property string|null $OAuthTokenEndpointUrl
 * @property string|null $OAuthAuthorizationEndpointUrl
 * @property string|null $OAuthScopes
 * @property 'ADOBE_ANALYTICS'|'AMAZON_ELASTICSEARCH'|'ATHENA'|'AURORA'|'AURORA_POSTGRESQL'|'AWS_IOT_ANALYTICS'|'GITHUB'|'JIRA'|'MARIADB'|'MYSQL'|'ORACLE'|'POSTGRESQL'|'PRESTO'|'REDSHIFT'|'S3'|'S3_TABLES'|'SALESFORCE'|'SERVICENOW'|'SNOWFLAKE'|'SPARK'|'SQLSERVER'|'TERADATA'|'TWITTER'|'TIMESTREAM'|'AMAZON_OPENSEARCH'|'EXASOL'|'DATABRICKS'|'STARBURST'|'TRINO'|'BIGQUERY'|'GOOGLESHEETS'|'GOOGLE_DRIVE'|'CONFLUENCE'|'SHAREPOINT'|'ONE_DRIVE'|'WEB_CRAWLER'|'S3_KNOWLEDGE_BASE'|'QBUSINESS'|null $DataSourceType
 * @property VpcConnectionProperties|null $IdentityProviderVpcConnectionProperties
 * @property \Aws\Api\DateTimeResult|null $CreatedTime
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedTime
 * @property string|null $Arn
 */
class OAuthClientApplication extends Shape
{
    /**
     * @param array{
     *     OAuthClientApplicationId?: string|null,
     *     Name?: string|null,
     *     OAuthClientAuthenticationType?: 'TOKEN'|null,
     *     OAuthTokenEndpointUrl?: string|null,
     *     OAuthAuthorizationEndpointUrl?: string|null,
     *     OAuthScopes?: string|null,
     *     DataSourceType?: 'ADOBE_ANALYTICS'|'AMAZON_ELASTICSEARCH'|'ATHENA'|'AURORA'|'AURORA_POSTGRESQL'|'AWS_IOT_ANALYTICS'|'GITHUB'|'JIRA'|'MARIADB'|'MYSQL'|'ORACLE'|'POSTGRESQL'|'PRESTO'|'REDSHIFT'|'S3'|'S3_TABLES'|'SALESFORCE'|'SERVICENOW'|'SNOWFLAKE'|'SPARK'|'SQLSERVER'|'TERADATA'|'TWITTER'|'TIMESTREAM'|'AMAZON_OPENSEARCH'|'EXASOL'|'DATABRICKS'|'STARBURST'|'TRINO'|'BIGQUERY'|'GOOGLESHEETS'|'GOOGLE_DRIVE'|'CONFLUENCE'|'SHAREPOINT'|'ONE_DRIVE'|'WEB_CRAWLER'|'S3_KNOWLEDGE_BASE'|'QBUSINESS'|null,
     *     IdentityProviderVpcConnectionProperties?: VpcConnectionProperties|null,
     *     CreatedTime?: \Aws\Api\DateTimeResult|null,
     *     LastUpdatedTime?: \Aws\Api\DateTimeResult|null,
     *     Arn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
