<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\ListConnectors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CapacityDescription|null $capacity
 * @property string|null $connectorArn
 * @property string|null $connectorDescription
 * @property string|null $connectorName
 * @property 'RUNNING'|'CREATING'|'UPDATING'|'DELETING'|'FAILED'|null $connectorState
 * @property \Aws\Api\DateTimeResult|null $creationTime
 * @property string|null $currentVersion
 * @property KafkaClusterDescription|null $kafkaCluster
 * @property KafkaClusterClientAuthenticationDescription|null $kafkaClusterClientAuthentication
 * @property KafkaClusterEncryptionInTransitDescription|null $kafkaClusterEncryptionInTransit
 * @property string|null $kafkaConnectVersion
 * @property LogDeliveryDescription|null $logDelivery
 * @property 'IPV4'|'DUAL'|null $networkType
 * @property list<PluginDescription>|null $plugins
 * @property string|null $serviceExecutionRoleArn
 * @property WorkerConfigurationDescription|null $workerConfiguration
 */
class ConnectorSummary extends Shape
{
    /**
     * @param array{
     *     capacity?: CapacityDescription|null,
     *     connectorArn?: string|null,
     *     connectorDescription?: string|null,
     *     connectorName?: string|null,
     *     connectorState?: 'RUNNING'|'CREATING'|'UPDATING'|'DELETING'|'FAILED'|null,
     *     creationTime?: \Aws\Api\DateTimeResult|null,
     *     currentVersion?: string|null,
     *     kafkaCluster?: KafkaClusterDescription|null,
     *     kafkaClusterClientAuthentication?: KafkaClusterClientAuthenticationDescription|null,
     *     kafkaClusterEncryptionInTransit?: KafkaClusterEncryptionInTransitDescription|null,
     *     kafkaConnectVersion?: string|null,
     *     logDelivery?: LogDeliveryDescription|null,
     *     networkType?: 'IPV4'|'DUAL'|null,
     *     plugins?: list<PluginDescription>|null,
     *     serviceExecutionRoleArn?: string|null,
     *     workerConfiguration?: WorkerConfigurationDescription|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
