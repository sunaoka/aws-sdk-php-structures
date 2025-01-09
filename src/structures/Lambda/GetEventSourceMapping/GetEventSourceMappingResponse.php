<?php

namespace Sunaoka\Aws\Structures\Lambda\GetEventSourceMapping;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $UUID
 * @property 'TRIM_HORIZON'|'LATEST'|'AT_TIMESTAMP' $StartingPosition
 * @property \Aws\Api\DateTimeResult $StartingPositionTimestamp
 * @property int $BatchSize
 * @property int $MaximumBatchingWindowInSeconds
 * @property int $ParallelizationFactor
 * @property string $EventSourceArn
 * @property Shapes\FilterCriteria $FilterCriteria
 * @property string $FunctionArn
 * @property \Aws\Api\DateTimeResult $LastModified
 * @property string $LastProcessingResult
 * @property string $State
 * @property string $StateTransitionReason
 * @property Shapes\DestinationConfig $DestinationConfig
 * @property list<string> $Topics
 * @property list<string> $Queues
 * @property list<Shapes\SourceAccessConfiguration> $SourceAccessConfigurations
 * @property Shapes\SelfManagedEventSource $SelfManagedEventSource
 * @property int $MaximumRecordAgeInSeconds
 * @property bool $BisectBatchOnFunctionError
 * @property int $MaximumRetryAttempts
 * @property int $TumblingWindowInSeconds
 * @property list<'ReportBatchItemFailures'> $FunctionResponseTypes
 * @property Shapes\AmazonManagedKafkaEventSourceConfig $AmazonManagedKafkaEventSourceConfig
 * @property Shapes\SelfManagedKafkaEventSourceConfig $SelfManagedKafkaEventSourceConfig
 * @property Shapes\ScalingConfig $ScalingConfig
 * @property Shapes\DocumentDBEventSourceConfig $DocumentDBEventSourceConfig
 * @property string $KMSKeyArn
 * @property Shapes\FilterCriteriaError $FilterCriteriaError
 * @property string $EventSourceMappingArn
 * @property Shapes\EventSourceMappingMetricsConfig $MetricsConfig
 * @property Shapes\ProvisionedPollerConfig $ProvisionedPollerConfig
 */
class GetEventSourceMappingResponse extends Response
{
}
