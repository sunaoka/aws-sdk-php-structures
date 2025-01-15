<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\DescribeConnector;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\CapacityDescription|null $capacity
 * @property string|null $connectorArn
 * @property array<string, string>|null $connectorConfiguration
 * @property string|null $connectorDescription
 * @property string|null $connectorName
 * @property 'RUNNING'|'CREATING'|'UPDATING'|'DELETING'|'FAILED'|null $connectorState
 * @property \Aws\Api\DateTimeResult|null $creationTime
 * @property string|null $currentVersion
 * @property Shapes\KafkaClusterDescription|null $kafkaCluster
 * @property Shapes\KafkaClusterClientAuthenticationDescription|null $kafkaClusterClientAuthentication
 * @property Shapes\KafkaClusterEncryptionInTransitDescription|null $kafkaClusterEncryptionInTransit
 * @property string|null $kafkaConnectVersion
 * @property Shapes\LogDeliveryDescription|null $logDelivery
 * @property list<Shapes\PluginDescription>|null $plugins
 * @property string|null $serviceExecutionRoleArn
 * @property Shapes\WorkerConfigurationDescription|null $workerConfiguration
 * @property Shapes\StateDescription|null $stateDescription
 */
class DescribeConnectorResponse extends Response
{
}
