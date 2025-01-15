<?php

namespace Sunaoka\Aws\Structures\Appflow\DescribeFlow;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $flowArn
 * @property string|null $description
 * @property string|null $flowName
 * @property string|null $kmsArn
 * @property 'Active'|'Deprecated'|'Deleted'|'Draft'|'Errored'|'Suspended'|null $flowStatus
 * @property string|null $flowStatusMessage
 * @property Shapes\SourceFlowConfig|null $sourceFlowConfig
 * @property list<Shapes\DestinationFlowConfig>|null $destinationFlowConfigList
 * @property Shapes\ExecutionDetails|null $lastRunExecutionDetails
 * @property Shapes\TriggerConfig|null $triggerConfig
 * @property list<Shapes\Task>|null $tasks
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedAt
 * @property string|null $createdBy
 * @property string|null $lastUpdatedBy
 * @property array<string, string>|null $tags
 * @property Shapes\MetadataCatalogConfig|null $metadataCatalogConfig
 * @property list<Shapes\MetadataCatalogDetail>|null $lastRunMetadataCatalogDetails
 * @property int|null $schemaVersion
 */
class DescribeFlowResponse extends Response
{
}
