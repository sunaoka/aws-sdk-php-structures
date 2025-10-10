<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AmazonElasticsearchParameters|null $AmazonElasticsearchParameters
 * @property AthenaParameters|null $AthenaParameters
 * @property AuroraParameters|null $AuroraParameters
 * @property AuroraPostgreSqlParameters|null $AuroraPostgreSqlParameters
 * @property AwsIotAnalyticsParameters|null $AwsIotAnalyticsParameters
 * @property JiraParameters|null $JiraParameters
 * @property MariaDbParameters|null $MariaDbParameters
 * @property MySqlParameters|null $MySqlParameters
 * @property OracleParameters|null $OracleParameters
 * @property PostgreSqlParameters|null $PostgreSqlParameters
 * @property PrestoParameters|null $PrestoParameters
 * @property RdsParameters|null $RdsParameters
 * @property RedshiftParameters|null $RedshiftParameters
 * @property S3Parameters|null $S3Parameters
 * @property S3KnowledgeBaseParameters|null $S3KnowledgeBaseParameters
 * @property ServiceNowParameters|null $ServiceNowParameters
 * @property SnowflakeParameters|null $SnowflakeParameters
 * @property SparkParameters|null $SparkParameters
 * @property SqlServerParameters|null $SqlServerParameters
 * @property TeradataParameters|null $TeradataParameters
 * @property TwitterParameters|null $TwitterParameters
 * @property AmazonOpenSearchParameters|null $AmazonOpenSearchParameters
 * @property ExasolParameters|null $ExasolParameters
 * @property DatabricksParameters|null $DatabricksParameters
 * @property StarburstParameters|null $StarburstParameters
 * @property TrinoParameters|null $TrinoParameters
 * @property BigQueryParameters|null $BigQueryParameters
 * @property ImpalaParameters|null $ImpalaParameters
 * @property CustomConnectionParameters|null $CustomConnectionParameters
 * @property WebCrawlerParameters|null $WebCrawlerParameters
 * @property ConfluenceParameters|null $ConfluenceParameters
 * @property QBusinessParameters|null $QBusinessParameters
 */
class DataSourceParameters extends Shape
{
    /**
     * @param array{
     *     AmazonElasticsearchParameters?: AmazonElasticsearchParameters|null,
     *     AthenaParameters?: AthenaParameters|null,
     *     AuroraParameters?: AuroraParameters|null,
     *     AuroraPostgreSqlParameters?: AuroraPostgreSqlParameters|null,
     *     AwsIotAnalyticsParameters?: AwsIotAnalyticsParameters|null,
     *     JiraParameters?: JiraParameters|null,
     *     MariaDbParameters?: MariaDbParameters|null,
     *     MySqlParameters?: MySqlParameters|null,
     *     OracleParameters?: OracleParameters|null,
     *     PostgreSqlParameters?: PostgreSqlParameters|null,
     *     PrestoParameters?: PrestoParameters|null,
     *     RdsParameters?: RdsParameters|null,
     *     RedshiftParameters?: RedshiftParameters|null,
     *     S3Parameters?: S3Parameters|null,
     *     S3KnowledgeBaseParameters?: S3KnowledgeBaseParameters|null,
     *     ServiceNowParameters?: ServiceNowParameters|null,
     *     SnowflakeParameters?: SnowflakeParameters|null,
     *     SparkParameters?: SparkParameters|null,
     *     SqlServerParameters?: SqlServerParameters|null,
     *     TeradataParameters?: TeradataParameters|null,
     *     TwitterParameters?: TwitterParameters|null,
     *     AmazonOpenSearchParameters?: AmazonOpenSearchParameters|null,
     *     ExasolParameters?: ExasolParameters|null,
     *     DatabricksParameters?: DatabricksParameters|null,
     *     StarburstParameters?: StarburstParameters|null,
     *     TrinoParameters?: TrinoParameters|null,
     *     BigQueryParameters?: BigQueryParameters|null,
     *     ImpalaParameters?: ImpalaParameters|null,
     *     CustomConnectionParameters?: CustomConnectionParameters|null,
     *     WebCrawlerParameters?: WebCrawlerParameters|null,
     *     ConfluenceParameters?: ConfluenceParameters|null,
     *     QBusinessParameters?: QBusinessParameters|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
