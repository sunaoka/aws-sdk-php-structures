<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateOAuthClientApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $OAuthClientApplicationId
 * @property string $Name
 * @property string|null $ClientId
 * @property string|null $ClientSecret
 * @property string|null $OAuthTokenEndpointUrl
 * @property string|null $OAuthAuthorizationEndpointUrl
 * @property string|null $OAuthScopes
 * @property 'ADOBE_ANALYTICS'|'AMAZON_ELASTICSEARCH'|'ATHENA'|'AURORA'|'AURORA_POSTGRESQL'|'AWS_IOT_ANALYTICS'|'GITHUB'|'JIRA'|'MARIADB'|'MYSQL'|'ORACLE'|'POSTGRESQL'|'PRESTO'|'REDSHIFT'|'S3'|'S3_TABLES'|'SALESFORCE'|'SERVICENOW'|'SNOWFLAKE'|'SPARK'|'SQLSERVER'|'TERADATA'|'TWITTER'|'TIMESTREAM'|'AMAZON_OPENSEARCH'|'EXASOL'|'DATABRICKS'|'STARBURST'|'TRINO'|'BIGQUERY'|'GOOGLESHEETS'|'GOOGLE_DRIVE'|'CONFLUENCE'|'SHAREPOINT'|'ONE_DRIVE'|'WEB_CRAWLER'|'S3_KNOWLEDGE_BASE'|'QBUSINESS'|null $DataSourceType
 * @property Shapes\VpcConnectionProperties|null $IdentityProviderVpcConnectionProperties
 */
class UpdateOAuthClientApplicationRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     OAuthClientApplicationId: string,
     *     Name: string,
     *     ClientId?: string|null,
     *     ClientSecret?: string|null,
     *     OAuthTokenEndpointUrl?: string|null,
     *     OAuthAuthorizationEndpointUrl?: string|null,
     *     OAuthScopes?: string|null,
     *     DataSourceType?: 'ADOBE_ANALYTICS'|'AMAZON_ELASTICSEARCH'|'ATHENA'|'AURORA'|'AURORA_POSTGRESQL'|'AWS_IOT_ANALYTICS'|'GITHUB'|'JIRA'|'MARIADB'|'MYSQL'|'ORACLE'|'POSTGRESQL'|'PRESTO'|'REDSHIFT'|'S3'|'S3_TABLES'|'SALESFORCE'|'SERVICENOW'|'SNOWFLAKE'|'SPARK'|'SQLSERVER'|'TERADATA'|'TWITTER'|'TIMESTREAM'|'AMAZON_OPENSEARCH'|'EXASOL'|'DATABRICKS'|'STARBURST'|'TRINO'|'BIGQUERY'|'GOOGLESHEETS'|'GOOGLE_DRIVE'|'CONFLUENCE'|'SHAREPOINT'|'ONE_DRIVE'|'WEB_CRAWLER'|'S3_KNOWLEDGE_BASE'|'QBUSINESS'|null,
     *     IdentityProviderVpcConnectionProperties?: Shapes\VpcConnectionProperties|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
