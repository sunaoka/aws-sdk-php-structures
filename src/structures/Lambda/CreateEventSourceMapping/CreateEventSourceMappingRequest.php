<?php

namespace Sunaoka\Aws\Structures\Lambda\CreateEventSourceMapping;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $EventSourceArn
 * @property string $FunctionName
 * @property bool|null $Enabled
 * @property int<1, 10000>|null $BatchSize
 * @property Shapes\FilterCriteria|null $FilterCriteria
 * @property int<0, 300>|null $MaximumBatchingWindowInSeconds
 * @property int<1, 10>|null $ParallelizationFactor
 * @property 'TRIM_HORIZON'|'LATEST'|'AT_TIMESTAMP'|null $StartingPosition
 * @property \Aws\Api\DateTimeResult|null $StartingPositionTimestamp
 * @property Shapes\DestinationConfig|null $DestinationConfig
 * @property int<-1, 604800>|null $MaximumRecordAgeInSeconds
 * @property bool|null $BisectBatchOnFunctionError
 * @property int<-1, 10000>|null $MaximumRetryAttempts
 * @property array<string, string>|null $Tags
 * @property int<0, 900>|null $TumblingWindowInSeconds
 * @property list<string>|null $Topics
 * @property list<string>|null $Queues
 * @property list<Shapes\SourceAccessConfiguration>|null $SourceAccessConfigurations
 * @property Shapes\SelfManagedEventSource|null $SelfManagedEventSource
 * @property list<'ReportBatchItemFailures'>|null $FunctionResponseTypes
 * @property Shapes\AmazonManagedKafkaEventSourceConfig|null $AmazonManagedKafkaEventSourceConfig
 * @property Shapes\SelfManagedKafkaEventSourceConfig|null $SelfManagedKafkaEventSourceConfig
 * @property Shapes\ScalingConfig|null $ScalingConfig
 * @property Shapes\DocumentDBEventSourceConfig|null $DocumentDBEventSourceConfig
 * @property string|null $KMSKeyArn
 * @property Shapes\EventSourceMappingMetricsConfig|null $MetricsConfig
 * @property Shapes\EventSourceMappingLoggingConfig|null $LoggingConfig
 * @property Shapes\ProvisionedPollerConfig|null $ProvisionedPollerConfig
 */
class CreateEventSourceMappingRequest extends Request
{
    /**
     * @param array{
     *     EventSourceArn?: string|null,
     *     FunctionName: string,
     *     Enabled?: bool|null,
     *     BatchSize?: int<1, 10000>|null,
     *     FilterCriteria?: Shapes\FilterCriteria|null,
     *     MaximumBatchingWindowInSeconds?: int<0, 300>|null,
     *     ParallelizationFactor?: int<1, 10>|null,
     *     StartingPosition?: 'TRIM_HORIZON'|'LATEST'|'AT_TIMESTAMP'|null,
     *     StartingPositionTimestamp?: \Aws\Api\DateTimeResult|null,
     *     DestinationConfig?: Shapes\DestinationConfig|null,
     *     MaximumRecordAgeInSeconds?: int<-1, 604800>|null,
     *     BisectBatchOnFunctionError?: bool|null,
     *     MaximumRetryAttempts?: int<-1, 10000>|null,
     *     Tags?: array<string, string>|null,
     *     TumblingWindowInSeconds?: int<0, 900>|null,
     *     Topics?: list<string>|null,
     *     Queues?: list<string>|null,
     *     SourceAccessConfigurations?: list<Shapes\SourceAccessConfiguration>|null,
     *     SelfManagedEventSource?: Shapes\SelfManagedEventSource|null,
     *     FunctionResponseTypes?: list<'ReportBatchItemFailures'>|null,
     *     AmazonManagedKafkaEventSourceConfig?: Shapes\AmazonManagedKafkaEventSourceConfig|null,
     *     SelfManagedKafkaEventSourceConfig?: Shapes\SelfManagedKafkaEventSourceConfig|null,
     *     ScalingConfig?: Shapes\ScalingConfig|null,
     *     DocumentDBEventSourceConfig?: Shapes\DocumentDBEventSourceConfig|null,
     *     KMSKeyArn?: string|null,
     *     MetricsConfig?: Shapes\EventSourceMappingMetricsConfig|null,
     *     LoggingConfig?: Shapes\EventSourceMappingLoggingConfig|null,
     *     ProvisionedPollerConfig?: Shapes\ProvisionedPollerConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
