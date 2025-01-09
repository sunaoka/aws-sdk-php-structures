<?php

namespace Sunaoka\Aws\Structures\Appflow\DescribeFlow;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $flowArn
 * @property string $description
 * @property string $flowName
 * @property string $kmsArn
 * @property 'Active'|'Deprecated'|'Deleted'|'Draft'|'Errored'|'Suspended' $flowStatus
 * @property string $flowStatusMessage
 * @property Shapes\SourceFlowConfig $sourceFlowConfig
 * @property list<Shapes\DestinationFlowConfig> $destinationFlowConfigList
 * @property Shapes\ExecutionDetails $lastRunExecutionDetails
 * @property Shapes\TriggerConfig $triggerConfig
 * @property list<Shapes\Task> $tasks
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $lastUpdatedAt
 * @property string $createdBy
 * @property string $lastUpdatedBy
 * @property array<string, string> $tags
 * @property Shapes\MetadataCatalogConfig $metadataCatalogConfig
 * @property list<Shapes\MetadataCatalogDetail> $lastRunMetadataCatalogDetails
 * @property int $schemaVersion
 */
class DescribeFlowResponse extends Response
{
}
