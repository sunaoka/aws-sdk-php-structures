<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\ListConnectors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CapacityDescription $capacity
 * @property string $connectorArn
 * @property string $connectorDescription
 * @property string $connectorName
 * @property 'RUNNING'|'CREATING'|'UPDATING'|'DELETING'|'FAILED' $connectorState
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property string $currentVersion
 * @property KafkaClusterDescription $kafkaCluster
 * @property KafkaClusterClientAuthenticationDescription $kafkaClusterClientAuthentication
 * @property KafkaClusterEncryptionInTransitDescription $kafkaClusterEncryptionInTransit
 * @property string $kafkaConnectVersion
 * @property LogDeliveryDescription $logDelivery
 * @property list<PluginDescription> $plugins
 * @property string $serviceExecutionRoleArn
 * @property WorkerConfigurationDescription $workerConfiguration
 */
class ConnectorSummary extends Shape
{
    /**
     * @param array{
     *     capacity?: CapacityDescription,
     *     connectorArn?: string,
     *     connectorDescription?: string,
     *     connectorName?: string,
     *     connectorState?: 'RUNNING'|'CREATING'|'UPDATING'|'DELETING'|'FAILED',
     *     creationTime?: \Aws\Api\DateTimeResult,
     *     currentVersion?: string,
     *     kafkaCluster?: KafkaClusterDescription,
     *     kafkaClusterClientAuthentication?: KafkaClusterClientAuthenticationDescription,
     *     kafkaClusterEncryptionInTransit?: KafkaClusterEncryptionInTransitDescription,
     *     kafkaConnectVersion?: string,
     *     logDelivery?: LogDeliveryDescription,
     *     plugins?: list<PluginDescription>,
     *     serviceExecutionRoleArn?: string,
     *     workerConfiguration?: WorkerConfigurationDescription
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
