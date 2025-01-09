<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\CreateEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Broker
 * @property string $Topic
 * @property 'json'|'json-unformatted' $MessageFormat
 * @property bool $IncludeTransactionDetails
 * @property bool $IncludePartitionValue
 * @property bool $PartitionIncludeSchemaTable
 * @property bool $IncludeTableAlterOperations
 * @property bool $IncludeControlDetails
 * @property int $MessageMaxBytes
 * @property bool $IncludeNullAndEmpty
 * @property 'plaintext'|'ssl-authentication'|'ssl-encryption'|'sasl-ssl' $SecurityProtocol
 * @property string $SslClientCertificateArn
 * @property string $SslClientKeyArn
 * @property string $SslClientKeyPassword
 * @property string $SslCaCertificateArn
 * @property string $SaslUsername
 * @property string $SaslPassword
 * @property bool $NoHexPrefix
 * @property 'scram-sha-512'|'plain' $SaslMechanism
 * @property 'none'|'https' $SslEndpointIdentificationAlgorithm
 * @property bool $UseLargeIntegerValue
 */
class KafkaSettings extends Shape
{
    /**
     * @param array{
     *     Broker?: string,
     *     Topic?: string,
     *     MessageFormat?: 'json'|'json-unformatted',
     *     IncludeTransactionDetails?: bool,
     *     IncludePartitionValue?: bool,
     *     PartitionIncludeSchemaTable?: bool,
     *     IncludeTableAlterOperations?: bool,
     *     IncludeControlDetails?: bool,
     *     MessageMaxBytes?: int,
     *     IncludeNullAndEmpty?: bool,
     *     SecurityProtocol?: 'plaintext'|'ssl-authentication'|'ssl-encryption'|'sasl-ssl',
     *     SslClientCertificateArn?: string,
     *     SslClientKeyArn?: string,
     *     SslClientKeyPassword?: string,
     *     SslCaCertificateArn?: string,
     *     SaslUsername?: string,
     *     SaslPassword?: string,
     *     NoHexPrefix?: bool,
     *     SaslMechanism?: 'scram-sha-512'|'plain',
     *     SslEndpointIdentificationAlgorithm?: 'none'|'https',
     *     UseLargeIntegerValue?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
