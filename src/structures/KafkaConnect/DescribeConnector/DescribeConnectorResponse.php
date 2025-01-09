<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\DescribeConnector;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\CapacityDescription $capacity
 * @property string $connectorArn
 * @property array<string, string> $connectorConfiguration
 * @property string $connectorDescription
 * @property string $connectorName
 * @property 'RUNNING'|'CREATING'|'UPDATING'|'DELETING'|'FAILED' $connectorState
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property string $currentVersion
 * @property Shapes\KafkaClusterDescription $kafkaCluster
 * @property Shapes\KafkaClusterClientAuthenticationDescription $kafkaClusterClientAuthentication
 * @property Shapes\KafkaClusterEncryptionInTransitDescription $kafkaClusterEncryptionInTransit
 * @property string $kafkaConnectVersion
 * @property Shapes\LogDeliveryDescription $logDelivery
 * @property list<Shapes\PluginDescription> $plugins
 * @property string $serviceExecutionRoleArn
 * @property Shapes\StateDescription $stateDescription
 * @property Shapes\WorkerConfigurationDescription $workerConfiguration
 */
class DescribeConnectorResponse extends Response
{
}
