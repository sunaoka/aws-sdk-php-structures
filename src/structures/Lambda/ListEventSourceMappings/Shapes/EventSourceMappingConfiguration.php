<?php

namespace Sunaoka\Aws\Structures\Lambda\ListEventSourceMappings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $UUID
 * @property 'TRIM_HORIZON'|'LATEST'|'AT_TIMESTAMP'|null $StartingPosition
 * @property \Aws\Api\DateTimeResult|null $StartingPositionTimestamp
 * @property int<1, 10000>|null $BatchSize
 * @property int<0, 300>|null $MaximumBatchingWindowInSeconds
 * @property int<1, 10>|null $ParallelizationFactor
 * @property string|null $EventSourceArn
 * @property FilterCriteria|null $FilterCriteria
 * @property string|null $FunctionArn
 * @property \Aws\Api\DateTimeResult|null $LastModified
 * @property string|null $LastProcessingResult
 * @property string|null $State
 * @property string|null $StateTransitionReason
 * @property DestinationConfig|null $DestinationConfig
 * @property list<string>|null $Topics
 * @property list<string>|null $Queues
 * @property list<SourceAccessConfiguration>|null $SourceAccessConfigurations
 * @property SelfManagedEventSource|null $SelfManagedEventSource
 * @property int<-1, 604800>|null $MaximumRecordAgeInSeconds
 * @property bool|null $BisectBatchOnFunctionError
 * @property int<-1, 10000>|null $MaximumRetryAttempts
 * @property int<0, 900>|null $TumblingWindowInSeconds
 * @property list<'ReportBatchItemFailures'>|null $FunctionResponseTypes
 * @property AmazonManagedKafkaEventSourceConfig|null $AmazonManagedKafkaEventSourceConfig
 * @property SelfManagedKafkaEventSourceConfig|null $SelfManagedKafkaEventSourceConfig
 * @property ScalingConfig|null $ScalingConfig
 * @property DocumentDBEventSourceConfig|null $DocumentDBEventSourceConfig
 * @property string|null $KMSKeyArn
 * @property FilterCriteriaError|null $FilterCriteriaError
 * @property string|null $EventSourceMappingArn
 * @property EventSourceMappingMetricsConfig|null $MetricsConfig
 * @property EventSourceMappingLoggingConfig|null $LoggingConfig
 * @property ProvisionedPollerConfig|null $ProvisionedPollerConfig
 */
class EventSourceMappingConfiguration extends Shape
{
    /**
     * @param array{
     *     UUID?: string|null,
     *     StartingPosition?: 'TRIM_HORIZON'|'LATEST'|'AT_TIMESTAMP'|null,
     *     StartingPositionTimestamp?: \Aws\Api\DateTimeResult|null,
     *     BatchSize?: int<1, 10000>|null,
     *     MaximumBatchingWindowInSeconds?: int<0, 300>|null,
     *     ParallelizationFactor?: int<1, 10>|null,
     *     EventSourceArn?: string|null,
     *     FilterCriteria?: FilterCriteria|null,
     *     FunctionArn?: string|null,
     *     LastModified?: \Aws\Api\DateTimeResult|null,
     *     LastProcessingResult?: string|null,
     *     State?: string|null,
     *     StateTransitionReason?: string|null,
     *     DestinationConfig?: DestinationConfig|null,
     *     Topics?: list<string>|null,
     *     Queues?: list<string>|null,
     *     SourceAccessConfigurations?: list<SourceAccessConfiguration>|null,
     *     SelfManagedEventSource?: SelfManagedEventSource|null,
     *     MaximumRecordAgeInSeconds?: int<-1, 604800>|null,
     *     BisectBatchOnFunctionError?: bool|null,
     *     MaximumRetryAttempts?: int<-1, 10000>|null,
     *     TumblingWindowInSeconds?: int<0, 900>|null,
     *     FunctionResponseTypes?: list<'ReportBatchItemFailures'>|null,
     *     AmazonManagedKafkaEventSourceConfig?: AmazonManagedKafkaEventSourceConfig|null,
     *     SelfManagedKafkaEventSourceConfig?: SelfManagedKafkaEventSourceConfig|null,
     *     ScalingConfig?: ScalingConfig|null,
     *     DocumentDBEventSourceConfig?: DocumentDBEventSourceConfig|null,
     *     KMSKeyArn?: string|null,
     *     FilterCriteriaError?: FilterCriteriaError|null,
     *     EventSourceMappingArn?: string|null,
     *     MetricsConfig?: EventSourceMappingMetricsConfig|null,
     *     LoggingConfig?: EventSourceMappingLoggingConfig|null,
     *     ProvisionedPollerConfig?: ProvisionedPollerConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
