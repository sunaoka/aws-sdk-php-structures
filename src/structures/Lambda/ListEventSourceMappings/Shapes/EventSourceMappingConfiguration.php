<?php

namespace Sunaoka\Aws\Structures\Lambda\ListEventSourceMappings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $UUID
 * @property 'TRIM_HORIZON'|'LATEST'|'AT_TIMESTAMP' $StartingPosition
 * @property \Aws\Api\DateTimeResult $StartingPositionTimestamp
 * @property int $BatchSize
 * @property int $MaximumBatchingWindowInSeconds
 * @property int $ParallelizationFactor
 * @property string $EventSourceArn
 * @property FilterCriteria $FilterCriteria
 * @property string $FunctionArn
 * @property \Aws\Api\DateTimeResult $LastModified
 * @property string $LastProcessingResult
 * @property string $State
 * @property string $StateTransitionReason
 * @property DestinationConfig $DestinationConfig
 * @property list<string> $Topics
 * @property list<string> $Queues
 * @property list<SourceAccessConfiguration> $SourceAccessConfigurations
 * @property SelfManagedEventSource $SelfManagedEventSource
 * @property int $MaximumRecordAgeInSeconds
 * @property bool $BisectBatchOnFunctionError
 * @property int $MaximumRetryAttempts
 * @property int $TumblingWindowInSeconds
 * @property list<'ReportBatchItemFailures'> $FunctionResponseTypes
 * @property AmazonManagedKafkaEventSourceConfig $AmazonManagedKafkaEventSourceConfig
 * @property SelfManagedKafkaEventSourceConfig $SelfManagedKafkaEventSourceConfig
 * @property ScalingConfig $ScalingConfig
 * @property DocumentDBEventSourceConfig $DocumentDBEventSourceConfig
 * @property string $KMSKeyArn
 * @property FilterCriteriaError $FilterCriteriaError
 * @property string $EventSourceMappingArn
 * @property EventSourceMappingMetricsConfig $MetricsConfig
 * @property ProvisionedPollerConfig $ProvisionedPollerConfig
 */
class EventSourceMappingConfiguration extends Shape
{
    /**
     * @param array{
     *     UUID?: string,
     *     StartingPosition?: 'TRIM_HORIZON'|'LATEST'|'AT_TIMESTAMP',
     *     StartingPositionTimestamp?: \Aws\Api\DateTimeResult,
     *     BatchSize?: int,
     *     MaximumBatchingWindowInSeconds?: int,
     *     ParallelizationFactor?: int,
     *     EventSourceArn?: string,
     *     FilterCriteria?: FilterCriteria,
     *     FunctionArn?: string,
     *     LastModified?: \Aws\Api\DateTimeResult,
     *     LastProcessingResult?: string,
     *     State?: string,
     *     StateTransitionReason?: string,
     *     DestinationConfig?: DestinationConfig,
     *     Topics?: list<string>,
     *     Queues?: list<string>,
     *     SourceAccessConfigurations?: list<SourceAccessConfiguration>,
     *     SelfManagedEventSource?: SelfManagedEventSource,
     *     MaximumRecordAgeInSeconds?: int,
     *     BisectBatchOnFunctionError?: bool,
     *     MaximumRetryAttempts?: int,
     *     TumblingWindowInSeconds?: int,
     *     FunctionResponseTypes?: list<'ReportBatchItemFailures'>,
     *     AmazonManagedKafkaEventSourceConfig?: AmazonManagedKafkaEventSourceConfig,
     *     SelfManagedKafkaEventSourceConfig?: SelfManagedKafkaEventSourceConfig,
     *     ScalingConfig?: ScalingConfig,
     *     DocumentDBEventSourceConfig?: DocumentDBEventSourceConfig,
     *     KMSKeyArn?: string,
     *     FilterCriteriaError?: FilterCriteriaError,
     *     EventSourceMappingArn?: string,
     *     MetricsConfig?: EventSourceMappingMetricsConfig,
     *     ProvisionedPollerConfig?: ProvisionedPollerConfig
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
