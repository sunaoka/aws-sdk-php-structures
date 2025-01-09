<?php

namespace Sunaoka\Aws\Structures\DataZone\ListConnections;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property string $environmentIdentifier
 * @property int $maxResults
 * @property string $name
 * @property string $nextToken
 * @property string $projectIdentifier
 * @property 'NAME' $sortBy
 * @property 'ASCENDING'|'DESCENDING' $sortOrder
 * @property 'ATHENA'|'BIGQUERY'|'DATABRICKS'|'DOCUMENTDB'|'DYNAMODB'|'HYPERPOD'|'IAM'|'MYSQL'|'OPENSEARCH'|'ORACLE'|'POSTGRESQL'|'REDSHIFT'|'SAPHANA'|'SNOWFLAKE'|'SPARK'|'SQLSERVER'|'TERADATA'|'VERTICA'|'WORKFLOWS_MWAA' $type
 */
class ListConnectionsRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     environmentIdentifier?: string,
     *     maxResults?: int,
     *     name?: string,
     *     nextToken?: string,
     *     projectIdentifier: string,
     *     sortBy?: 'NAME',
     *     sortOrder?: 'ASCENDING'|'DESCENDING',
     *     type?: 'ATHENA'|'BIGQUERY'|'DATABRICKS'|'DOCUMENTDB'|'DYNAMODB'|'HYPERPOD'|'IAM'|'MYSQL'|'OPENSEARCH'|'ORACLE'|'POSTGRESQL'|'REDSHIFT'|'SAPHANA'|'SNOWFLAKE'|'SPARK'|'SQLSERVER'|'TERADATA'|'VERTICA'|'WORKFLOWS_MWAA'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
