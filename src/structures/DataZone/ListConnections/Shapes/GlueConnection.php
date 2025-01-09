<?php

namespace Sunaoka\Aws\Structures\DataZone\ListConnections\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string> $athenaProperties
 * @property AuthenticationConfiguration $authenticationConfiguration
 * @property list<'SPARK'|'ATHENA'|'PYTHON'> $compatibleComputeEnvironments
 * @property array<string, string> $connectionProperties
 * @property int $connectionSchemaVersion
 * @property 'ATHENA'|'BIGQUERY'|'DATABRICKS'|'DOCUMENTDB'|'DYNAMODB'|'HYPERPOD'|'IAM'|'MYSQL'|'OPENSEARCH'|'ORACLE'|'POSTGRESQL'|'REDSHIFT'|'SAPHANA'|'SNOWFLAKE'|'SPARK'|'SQLSERVER'|'TERADATA'|'VERTICA'|'WORKFLOWS_MWAA' $connectionType
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property string $description
 * @property \Aws\Api\DateTimeResult $lastConnectionValidationTime
 * @property string $lastUpdatedBy
 * @property \Aws\Api\DateTimeResult $lastUpdatedTime
 * @property list<string> $matchCriteria
 * @property string $name
 * @property PhysicalConnectionRequirements $physicalConnectionRequirements
 * @property array<string, string> $pythonProperties
 * @property array<string, string> $sparkProperties
 * @property 'CREATING'|'CREATE_FAILED'|'DELETING'|'DELETE_FAILED'|'READY'|'UPDATING'|'UPDATE_FAILED'|'DELETED' $status
 * @property string $statusReason
 */
class GlueConnection extends Shape
{
    /**
     * @param array{
     *     athenaProperties?: array<string, string>,
     *     authenticationConfiguration?: AuthenticationConfiguration,
     *     compatibleComputeEnvironments?: list<'SPARK'|'ATHENA'|'PYTHON'>,
     *     connectionProperties?: array<string, string>,
     *     connectionSchemaVersion?: int,
     *     connectionType?: 'ATHENA'|'BIGQUERY'|'DATABRICKS'|'DOCUMENTDB'|'DYNAMODB'|'HYPERPOD'|'IAM'|'MYSQL'|'OPENSEARCH'|'ORACLE'|'POSTGRESQL'|'REDSHIFT'|'SAPHANA'|'SNOWFLAKE'|'SPARK'|'SQLSERVER'|'TERADATA'|'VERTICA'|'WORKFLOWS_MWAA',
     *     creationTime?: \Aws\Api\DateTimeResult,
     *     description?: string,
     *     lastConnectionValidationTime?: \Aws\Api\DateTimeResult,
     *     lastUpdatedBy?: string,
     *     lastUpdatedTime?: \Aws\Api\DateTimeResult,
     *     matchCriteria?: list<string>,
     *     name?: string,
     *     physicalConnectionRequirements?: PhysicalConnectionRequirements,
     *     pythonProperties?: array<string, string>,
     *     sparkProperties?: array<string, string>,
     *     status?: 'CREATING'|'CREATE_FAILED'|'DELETING'|'DELETE_FAILED'|'READY'|'UPDATING'|'UPDATE_FAILED'|'DELETED',
     *     statusReason?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
