<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateOAuthClientApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $OAuthClientApplicationId
 * @property string $Name
 * @property 'TOKEN' $OAuthClientAuthenticationType
 * @property string $ClientId
 * @property string $ClientSecret
 * @property string $OAuthTokenEndpointUrl
 * @property string|null $OAuthAuthorizationEndpointUrl
 * @property string|null $OAuthScopes
 * @property 'ADOBE_ANALYTICS'|'AMAZON_ELASTICSEARCH'|'ATHENA'|'AURORA'|'AURORA_POSTGRESQL'|'AWS_IOT_ANALYTICS'|'GITHUB'|'JIRA'|'MARIADB'|'MYSQL'|'ORACLE'|'POSTGRESQL'|'PRESTO'|'REDSHIFT'|'S3'|'S3_TABLES'|'SALESFORCE'|'SERVICENOW'|'SNOWFLAKE'|'SPARK'|'SQLSERVER'|'TERADATA'|'TWITTER'|'TIMESTREAM'|'AMAZON_OPENSEARCH'|'EXASOL'|'DATABRICKS'|'STARBURST'|'TRINO'|'BIGQUERY'|'GOOGLESHEETS'|'GOOGLE_DRIVE'|'CONFLUENCE'|'SHAREPOINT'|'ONE_DRIVE'|'WEB_CRAWLER'|'S3_KNOWLEDGE_BASE'|'QBUSINESS'|null $DataSourceType
 * @property Shapes\VpcConnectionProperties|null $IdentityProviderVpcConnectionProperties
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateOAuthClientApplicationRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     OAuthClientApplicationId: string,
     *     Name: string,
     *     OAuthClientAuthenticationType: 'TOKEN',
     *     ClientId: string,
     *     ClientSecret: string,
     *     OAuthTokenEndpointUrl: string,
     *     OAuthAuthorizationEndpointUrl?: string|null,
     *     OAuthScopes?: string|null,
     *     DataSourceType?: 'ADOBE_ANALYTICS'|'AMAZON_ELASTICSEARCH'|'ATHENA'|'AURORA'|'AURORA_POSTGRESQL'|'AWS_IOT_ANALYTICS'|'GITHUB'|'JIRA'|'MARIADB'|'MYSQL'|'ORACLE'|'POSTGRESQL'|'PRESTO'|'REDSHIFT'|'S3'|'S3_TABLES'|'SALESFORCE'|'SERVICENOW'|'SNOWFLAKE'|'SPARK'|'SQLSERVER'|'TERADATA'|'TWITTER'|'TIMESTREAM'|'AMAZON_OPENSEARCH'|'EXASOL'|'DATABRICKS'|'STARBURST'|'TRINO'|'BIGQUERY'|'GOOGLESHEETS'|'GOOGLE_DRIVE'|'CONFLUENCE'|'SHAREPOINT'|'ONE_DRIVE'|'WEB_CRAWLER'|'S3_KNOWLEDGE_BASE'|'QBUSINESS'|null,
     *     IdentityProviderVpcConnectionProperties?: Shapes\VpcConnectionProperties|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
