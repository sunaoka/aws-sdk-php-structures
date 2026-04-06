<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\CreateConnector;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\Capacity $capacity
 * @property array<string, string> $connectorConfiguration
 * @property string|null $connectorDescription
 * @property string $connectorName
 * @property Shapes\KafkaCluster $kafkaCluster
 * @property Shapes\KafkaClusterClientAuthentication $kafkaClusterClientAuthentication
 * @property Shapes\KafkaClusterEncryptionInTransit $kafkaClusterEncryptionInTransit
 * @property string $kafkaConnectVersion
 * @property Shapes\LogDelivery|null $logDelivery
 * @property list<Shapes\Plugin> $plugins
 * @property string $serviceExecutionRoleArn
 * @property Shapes\WorkerConfiguration|null $workerConfiguration
 * @property array<string, string>|null $tags
 */
class CreateConnectorRequest extends Request
{
    /**
     * @param array{
     *     capacity: Shapes\Capacity,
     *     connectorConfiguration: array<string, string>,
     *     connectorDescription?: string|null,
     *     connectorName: string,
     *     kafkaCluster: Shapes\KafkaCluster,
     *     kafkaClusterClientAuthentication: Shapes\KafkaClusterClientAuthentication,
     *     kafkaClusterEncryptionInTransit: Shapes\KafkaClusterEncryptionInTransit,
     *     kafkaConnectVersion: string,
     *     logDelivery?: Shapes\LogDelivery|null,
     *     plugins: list<Shapes\Plugin>,
     *     serviceExecutionRoleArn: string,
     *     workerConfiguration?: Shapes\WorkerConfiguration|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
