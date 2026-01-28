<?php

namespace Sunaoka\Aws\Structures\Lambda\UpdateEventSourceMapping;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $UUID
 * @property 'TRIM_HORIZON'|'LATEST'|'AT_TIMESTAMP'|null $StartingPosition
 * @property \Aws\Api\DateTimeResult|null $StartingPositionTimestamp
 * @property int<1, 10000>|null $BatchSize
 * @property int<0, 300>|null $MaximumBatchingWindowInSeconds
 * @property int<1, 10>|null $ParallelizationFactor
 * @property string|null $EventSourceArn
 * @property Shapes\FilterCriteria|null $FilterCriteria
 * @property string|null $FunctionArn
 * @property \Aws\Api\DateTimeResult|null $LastModified
 * @property string|null $LastProcessingResult
 * @property string|null $State
 * @property string|null $StateTransitionReason
 * @property Shapes\DestinationConfig|null $DestinationConfig
 * @property list<string>|null $Topics
 * @property list<string>|null $Queues
 * @property list<Shapes\SourceAccessConfiguration>|null $SourceAccessConfigurations
 * @property Shapes\SelfManagedEventSource|null $SelfManagedEventSource
 * @property int<-1, 604800>|null $MaximumRecordAgeInSeconds
 * @property bool|null $BisectBatchOnFunctionError
 * @property int<-1, 10000>|null $MaximumRetryAttempts
 * @property int<0, 900>|null $TumblingWindowInSeconds
 * @property list<'ReportBatchItemFailures'>|null $FunctionResponseTypes
 * @property Shapes\AmazonManagedKafkaEventSourceConfig|null $AmazonManagedKafkaEventSourceConfig
 * @property Shapes\SelfManagedKafkaEventSourceConfig|null $SelfManagedKafkaEventSourceConfig
 * @property Shapes\ScalingConfig|null $ScalingConfig
 * @property Shapes\DocumentDBEventSourceConfig|null $DocumentDBEventSourceConfig
 * @property string|null $KMSKeyArn
 * @property Shapes\FilterCriteriaError|null $FilterCriteriaError
 * @property string|null $EventSourceMappingArn
 * @property Shapes\EventSourceMappingMetricsConfig|null $MetricsConfig
 * @property Shapes\EventSourceMappingLoggingConfig|null $LoggingConfig
 * @property Shapes\ProvisionedPollerConfig|null $ProvisionedPollerConfig
 */
class UpdateEventSourceMappingResponse extends Response
{
}
