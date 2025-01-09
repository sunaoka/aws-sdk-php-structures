<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\CreateConnector;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\Capacity $capacity
 * @property array<string, string> $connectorConfiguration
 * @property string $connectorDescription
 * @property string $connectorName
 * @property Shapes\KafkaCluster $kafkaCluster
 * @property Shapes\KafkaClusterClientAuthentication $kafkaClusterClientAuthentication
 * @property Shapes\KafkaClusterEncryptionInTransit $kafkaClusterEncryptionInTransit
 * @property string $kafkaConnectVersion
 * @property Shapes\LogDelivery $logDelivery
 * @property list<Shapes\Plugin> $plugins
 * @property string $serviceExecutionRoleArn
 * @property array<string, string> $tags
 * @property Shapes\WorkerConfiguration $workerConfiguration
 */
class CreateConnectorRequest extends Request
{
    /**
     * @param array{
     *     capacity: Shapes\Capacity,
     *     connectorConfiguration: array<string, string>,
     *     connectorDescription?: string,
     *     connectorName: string,
     *     kafkaCluster: Shapes\KafkaCluster,
     *     kafkaClusterClientAuthentication: Shapes\KafkaClusterClientAuthentication,
     *     kafkaClusterEncryptionInTransit: Shapes\KafkaClusterEncryptionInTransit,
     *     kafkaConnectVersion: string,
     *     logDelivery?: Shapes\LogDelivery,
     *     plugins: list<Shapes\Plugin>,
     *     serviceExecutionRoleArn: string,
     *     tags?: array<string, string>,
     *     workerConfiguration?: Shapes\WorkerConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
