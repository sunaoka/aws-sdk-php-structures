<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DeleteEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Broker
 * @property string|null $Topic
 * @property 'json'|'json-unformatted'|null $MessageFormat
 * @property bool|null $IncludeTransactionDetails
 * @property bool|null $IncludePartitionValue
 * @property bool|null $PartitionIncludeSchemaTable
 * @property bool|null $IncludeTableAlterOperations
 * @property bool|null $IncludeControlDetails
 * @property int|null $MessageMaxBytes
 * @property bool|null $IncludeNullAndEmpty
 * @property 'plaintext'|'ssl-authentication'|'ssl-encryption'|'sasl-ssl'|null $SecurityProtocol
 * @property string|null $SslClientCertificateArn
 * @property string|null $SslClientKeyArn
 * @property string|null $SslClientKeyPassword
 * @property string|null $SslCaCertificateArn
 * @property string|null $SaslUsername
 * @property string|null $SaslPassword
 * @property bool|null $NoHexPrefix
 * @property 'scram-sha-512'|'plain'|null $SaslMechanism
 * @property 'none'|'https'|null $SslEndpointIdentificationAlgorithm
 * @property bool|null $UseLargeIntegerValue
 */
class KafkaSettings extends Shape
{
    /**
     * @param array{
     *     Broker?: string|null,
     *     Topic?: string|null,
     *     MessageFormat?: 'json'|'json-unformatted'|null,
     *     IncludeTransactionDetails?: bool|null,
     *     IncludePartitionValue?: bool|null,
     *     PartitionIncludeSchemaTable?: bool|null,
     *     IncludeTableAlterOperations?: bool|null,
     *     IncludeControlDetails?: bool|null,
     *     MessageMaxBytes?: int|null,
     *     IncludeNullAndEmpty?: bool|null,
     *     SecurityProtocol?: 'plaintext'|'ssl-authentication'|'ssl-encryption'|'sasl-ssl'|null,
     *     SslClientCertificateArn?: string|null,
     *     SslClientKeyArn?: string|null,
     *     SslClientKeyPassword?: string|null,
     *     SslCaCertificateArn?: string|null,
     *     SaslUsername?: string|null,
     *     SaslPassword?: string|null,
     *     NoHexPrefix?: bool|null,
     *     SaslMechanism?: 'scram-sha-512'|'plain'|null,
     *     SslEndpointIdentificationAlgorithm?: 'none'|'https'|null,
     *     UseLargeIntegerValue?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
