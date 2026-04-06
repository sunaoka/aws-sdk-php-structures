<?php

namespace Sunaoka\Aws\Structures\DataZone\ListConnections;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property int<1, 50>|null $maxResults
 * @property string|null $nextToken
 * @property 'NAME'|null $sortBy
 * @property 'ASCENDING'|'DESCENDING'|null $sortOrder
 * @property string|null $name
 * @property string|null $environmentIdentifier
 * @property string|null $projectIdentifier
 * @property 'ATHENA'|'BIGQUERY'|'DATABRICKS'|'DOCUMENTDB'|'DYNAMODB'|'HYPERPOD'|'IAM'|'MYSQL'|'OPENSEARCH'|'ORACLE'|'POSTGRESQL'|'REDSHIFT'|'S3'|'SAPHANA'|'SNOWFLAKE'|'SPARK'|'SQLSERVER'|'TERADATA'|'VERTICA'|'WORKFLOWS_MWAA'|'AMAZON_Q'|'MLFLOW'|null $type
 * @property 'DOMAIN'|'PROJECT'|null $scope
 */
class ListConnectionsRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     maxResults?: int<1, 50>|null,
     *     nextToken?: string|null,
     *     sortBy?: 'NAME'|null,
     *     sortOrder?: 'ASCENDING'|'DESCENDING'|null,
     *     name?: string|null,
     *     environmentIdentifier?: string|null,
     *     projectIdentifier?: string|null,
     *     type?: 'ATHENA'|'BIGQUERY'|'DATABRICKS'|'DOCUMENTDB'|'DYNAMODB'|'HYPERPOD'|'IAM'|'MYSQL'|'OPENSEARCH'|'ORACLE'|'POSTGRESQL'|'REDSHIFT'|'S3'|'SAPHANA'|'SNOWFLAKE'|'SPARK'|'SQLSERVER'|'TERADATA'|'VERTICA'|'WORKFLOWS_MWAA'|'AMAZON_Q'|'MLFLOW'|null,
     *     scope?: 'DOMAIN'|'PROJECT'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
