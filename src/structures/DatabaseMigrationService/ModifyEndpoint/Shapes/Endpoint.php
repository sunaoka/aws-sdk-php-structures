<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\ModifyEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $EndpointIdentifier
 * @property 'source'|'target'|null $EndpointType
 * @property string|null $EngineName
 * @property string|null $EngineDisplayName
 * @property string|null $Username
 * @property string|null $ServerName
 * @property int|null $Port
 * @property string|null $DatabaseName
 * @property string|null $ExtraConnectionAttributes
 * @property string|null $Status
 * @property string|null $KmsKeyId
 * @property string|null $EndpointArn
 * @property string|null $CertificateArn
 * @property 'none'|'require'|'verify-ca'|'verify-full'|null $SslMode
 * @property string|null $ServiceAccessRoleArn
 * @property string|null $ExternalTableDefinition
 * @property string|null $ExternalId
 * @property DynamoDbSettings|null $DynamoDbSettings
 * @property S3Settings|null $S3Settings
 * @property DmsTransferSettings|null $DmsTransferSettings
 * @property MongoDbSettings|null $MongoDbSettings
 * @property KinesisSettings|null $KinesisSettings
 * @property KafkaSettings|null $KafkaSettings
 * @property ElasticsearchSettings|null $ElasticsearchSettings
 * @property NeptuneSettings|null $NeptuneSettings
 * @property RedshiftSettings|null $RedshiftSettings
 * @property PostgreSQLSettings|null $PostgreSQLSettings
 * @property MySQLSettings|null $MySQLSettings
 * @property OracleSettings|null $OracleSettings
 * @property SybaseSettings|null $SybaseSettings
 * @property MicrosoftSQLServerSettings|null $MicrosoftSQLServerSettings
 * @property IBMDb2Settings|null $IBMDb2Settings
 * @property DocDbSettings|null $DocDbSettings
 * @property RedisSettings|null $RedisSettings
 * @property GcpMySQLSettings|null $GcpMySQLSettings
 * @property TimestreamSettings|null $TimestreamSettings
 */
class Endpoint extends Shape
{
    /**
     * @param array{
     *     EndpointIdentifier?: string|null,
     *     EndpointType?: 'source'|'target'|null,
     *     EngineName?: string|null,
     *     EngineDisplayName?: string|null,
     *     Username?: string|null,
     *     ServerName?: string|null,
     *     Port?: int|null,
     *     DatabaseName?: string|null,
     *     ExtraConnectionAttributes?: string|null,
     *     Status?: string|null,
     *     KmsKeyId?: string|null,
     *     EndpointArn?: string|null,
     *     CertificateArn?: string|null,
     *     SslMode?: 'none'|'require'|'verify-ca'|'verify-full'|null,
     *     ServiceAccessRoleArn?: string|null,
     *     ExternalTableDefinition?: string|null,
     *     ExternalId?: string|null,
     *     DynamoDbSettings?: DynamoDbSettings|null,
     *     S3Settings?: S3Settings|null,
     *     DmsTransferSettings?: DmsTransferSettings|null,
     *     MongoDbSettings?: MongoDbSettings|null,
     *     KinesisSettings?: KinesisSettings|null,
     *     KafkaSettings?: KafkaSettings|null,
     *     ElasticsearchSettings?: ElasticsearchSettings|null,
     *     NeptuneSettings?: NeptuneSettings|null,
     *     RedshiftSettings?: RedshiftSettings|null,
     *     PostgreSQLSettings?: PostgreSQLSettings|null,
     *     MySQLSettings?: MySQLSettings|null,
     *     OracleSettings?: OracleSettings|null,
     *     SybaseSettings?: SybaseSettings|null,
     *     MicrosoftSQLServerSettings?: MicrosoftSQLServerSettings|null,
     *     IBMDb2Settings?: IBMDb2Settings|null,
     *     DocDbSettings?: DocDbSettings|null,
     *     RedisSettings?: RedisSettings|null,
     *     GcpMySQLSettings?: GcpMySQLSettings|null,
     *     TimestreamSettings?: TimestreamSettings|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
