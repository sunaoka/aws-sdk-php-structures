<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string> $athenaProperties
 * @property AuthenticationConfigurationInput $authenticationConfiguration
 * @property array<string, string> $connectionProperties
 * @property 'SNOWFLAKE'|'BIGQUERY'|'DOCUMENTDB'|'DYNAMODB'|'MYSQL'|'OPENSEARCH'|'ORACLE'|'POSTGRESQL'|'REDSHIFT'|'SAPHANA'|'SQLSERVER'|'TERADATA'|'VERTICA' $connectionType
 * @property string $description
 * @property string $matchCriteria
 * @property string $name
 * @property PhysicalConnectionRequirements $physicalConnectionRequirements
 * @property array<string, string> $pythonProperties
 * @property array<string, string> $sparkProperties
 * @property bool $validateCredentials
 * @property list<'SPARK'|'ATHENA'|'PYTHON'> $validateForComputeEnvironments
 */
class GlueConnectionInput extends Shape
{
    /**
     * @param array{
     *     athenaProperties?: array<string, string>,
     *     authenticationConfiguration?: AuthenticationConfigurationInput,
     *     connectionProperties?: array<string, string>,
     *     connectionType?: 'SNOWFLAKE'|'BIGQUERY'|'DOCUMENTDB'|'DYNAMODB'|'MYSQL'|'OPENSEARCH'|'ORACLE'|'POSTGRESQL'|'REDSHIFT'|'SAPHANA'|'SQLSERVER'|'TERADATA'|'VERTICA',
     *     description?: string,
     *     matchCriteria?: string,
     *     name?: string,
     *     physicalConnectionRequirements?: PhysicalConnectionRequirements,
     *     pythonProperties?: array<string, string>,
     *     sparkProperties?: array<string, string>,
     *     validateCredentials?: bool,
     *     validateForComputeEnvironments?: list<'SPARK'|'ATHENA'|'PYTHON'>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
