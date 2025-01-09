<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeEndpoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $EndpointIdentifier
 * @property 'source'|'target' $EndpointType
 * @property string $EngineName
 * @property string $EngineDisplayName
 * @property string $Username
 * @property string $ServerName
 * @property int $Port
 * @property string $DatabaseName
 * @property string $ExtraConnectionAttributes
 * @property string $Status
 * @property string $KmsKeyId
 * @property string $EndpointArn
 * @property string $CertificateArn
 * @property 'none'|'require'|'verify-ca'|'verify-full' $SslMode
 * @property string $ServiceAccessRoleArn
 * @property string $ExternalTableDefinition
 * @property string $ExternalId
 * @property DynamoDbSettings $DynamoDbSettings
 * @property S3Settings $S3Settings
 * @property DmsTransferSettings $DmsTransferSettings
 * @property MongoDbSettings $MongoDbSettings
 * @property KinesisSettings $KinesisSettings
 * @property KafkaSettings $KafkaSettings
 * @property ElasticsearchSettings $ElasticsearchSettings
 * @property NeptuneSettings $NeptuneSettings
 * @property RedshiftSettings $RedshiftSettings
 * @property PostgreSQLSettings $PostgreSQLSettings
 * @property MySQLSettings $MySQLSettings
 * @property OracleSettings $OracleSettings
 * @property SybaseSettings $SybaseSettings
 * @property MicrosoftSQLServerSettings $MicrosoftSQLServerSettings
 * @property IBMDb2Settings $IBMDb2Settings
 * @property DocDbSettings $DocDbSettings
 * @property RedisSettings $RedisSettings
 * @property GcpMySQLSettings $GcpMySQLSettings
 * @property TimestreamSettings $TimestreamSettings
 */
class Endpoint extends Shape
{
    /**
     * @param array{
     *     EndpointIdentifier?: string,
     *     EndpointType?: 'source'|'target',
     *     EngineName?: string,
     *     EngineDisplayName?: string,
     *     Username?: string,
     *     ServerName?: string,
     *     Port?: int,
     *     DatabaseName?: string,
     *     ExtraConnectionAttributes?: string,
     *     Status?: string,
     *     KmsKeyId?: string,
     *     EndpointArn?: string,
     *     CertificateArn?: string,
     *     SslMode?: 'none'|'require'|'verify-ca'|'verify-full',
     *     ServiceAccessRoleArn?: string,
     *     ExternalTableDefinition?: string,
     *     ExternalId?: string,
     *     DynamoDbSettings?: DynamoDbSettings,
     *     S3Settings?: S3Settings,
     *     DmsTransferSettings?: DmsTransferSettings,
     *     MongoDbSettings?: MongoDbSettings,
     *     KinesisSettings?: KinesisSettings,
     *     KafkaSettings?: KafkaSettings,
     *     ElasticsearchSettings?: ElasticsearchSettings,
     *     NeptuneSettings?: NeptuneSettings,
     *     RedshiftSettings?: RedshiftSettings,
     *     PostgreSQLSettings?: PostgreSQLSettings,
     *     MySQLSettings?: MySQLSettings,
     *     OracleSettings?: OracleSettings,
     *     SybaseSettings?: SybaseSettings,
     *     MicrosoftSQLServerSettings?: MicrosoftSQLServerSettings,
     *     IBMDb2Settings?: IBMDb2Settings,
     *     DocDbSettings?: DocDbSettings,
     *     RedisSettings?: RedisSettings,
     *     GcpMySQLSettings?: GcpMySQLSettings,
     *     TimestreamSettings?: TimestreamSettings
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
