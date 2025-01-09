<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAssetBundleImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AmazonElasticsearchParameters $AmazonElasticsearchParameters
 * @property AthenaParameters $AthenaParameters
 * @property AuroraParameters $AuroraParameters
 * @property AuroraPostgreSqlParameters $AuroraPostgreSqlParameters
 * @property AwsIotAnalyticsParameters $AwsIotAnalyticsParameters
 * @property JiraParameters $JiraParameters
 * @property MariaDbParameters $MariaDbParameters
 * @property MySqlParameters $MySqlParameters
 * @property OracleParameters $OracleParameters
 * @property PostgreSqlParameters $PostgreSqlParameters
 * @property PrestoParameters $PrestoParameters
 * @property RdsParameters $RdsParameters
 * @property RedshiftParameters $RedshiftParameters
 * @property S3Parameters $S3Parameters
 * @property ServiceNowParameters $ServiceNowParameters
 * @property SnowflakeParameters $SnowflakeParameters
 * @property SparkParameters $SparkParameters
 * @property SqlServerParameters $SqlServerParameters
 * @property TeradataParameters $TeradataParameters
 * @property TwitterParameters $TwitterParameters
 * @property AmazonOpenSearchParameters $AmazonOpenSearchParameters
 * @property ExasolParameters $ExasolParameters
 * @property DatabricksParameters $DatabricksParameters
 * @property StarburstParameters $StarburstParameters
 * @property TrinoParameters $TrinoParameters
 * @property BigQueryParameters $BigQueryParameters
 */
class DataSourceParameters extends Shape
{
    /**
     * @param array{
     *     AmazonElasticsearchParameters?: AmazonElasticsearchParameters,
     *     AthenaParameters?: AthenaParameters,
     *     AuroraParameters?: AuroraParameters,
     *     AuroraPostgreSqlParameters?: AuroraPostgreSqlParameters,
     *     AwsIotAnalyticsParameters?: AwsIotAnalyticsParameters,
     *     JiraParameters?: JiraParameters,
     *     MariaDbParameters?: MariaDbParameters,
     *     MySqlParameters?: MySqlParameters,
     *     OracleParameters?: OracleParameters,
     *     PostgreSqlParameters?: PostgreSqlParameters,
     *     PrestoParameters?: PrestoParameters,
     *     RdsParameters?: RdsParameters,
     *     RedshiftParameters?: RedshiftParameters,
     *     S3Parameters?: S3Parameters,
     *     ServiceNowParameters?: ServiceNowParameters,
     *     SnowflakeParameters?: SnowflakeParameters,
     *     SparkParameters?: SparkParameters,
     *     SqlServerParameters?: SqlServerParameters,
     *     TeradataParameters?: TeradataParameters,
     *     TwitterParameters?: TwitterParameters,
     *     AmazonOpenSearchParameters?: AmazonOpenSearchParameters,
     *     ExasolParameters?: ExasolParameters,
     *     DatabricksParameters?: DatabricksParameters,
     *     StarburstParameters?: StarburstParameters,
     *     TrinoParameters?: TrinoParameters,
     *     BigQueryParameters?: BigQueryParameters
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
