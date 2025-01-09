<?php

namespace Sunaoka\Aws\Structures\Lambda\CreateEventSourceMapping;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EventSourceArn
 * @property string $FunctionName
 * @property bool $Enabled
 * @property int<1, 10000> $BatchSize
 * @property Shapes\FilterCriteria $FilterCriteria
 * @property int<0, 300> $MaximumBatchingWindowInSeconds
 * @property int<1, 10> $ParallelizationFactor
 * @property 'TRIM_HORIZON'|'LATEST'|'AT_TIMESTAMP' $StartingPosition
 * @property \Aws\Api\DateTimeResult $StartingPositionTimestamp
 * @property Shapes\DestinationConfig $DestinationConfig
 * @property int<-1, 604800> $MaximumRecordAgeInSeconds
 * @property bool $BisectBatchOnFunctionError
 * @property int<-1, 10000> $MaximumRetryAttempts
 * @property array<string, string> $Tags
 * @property int<0, 900> $TumblingWindowInSeconds
 * @property list<string> $Topics
 * @property list<string> $Queues
 * @property list<Shapes\SourceAccessConfiguration> $SourceAccessConfigurations
 * @property Shapes\SelfManagedEventSource $SelfManagedEventSource
 * @property list<'ReportBatchItemFailures'> $FunctionResponseTypes
 * @property Shapes\AmazonManagedKafkaEventSourceConfig $AmazonManagedKafkaEventSourceConfig
 * @property Shapes\SelfManagedKafkaEventSourceConfig $SelfManagedKafkaEventSourceConfig
 * @property Shapes\ScalingConfig $ScalingConfig
 * @property Shapes\DocumentDBEventSourceConfig $DocumentDBEventSourceConfig
 * @property string $KMSKeyArn
 * @property Shapes\EventSourceMappingMetricsConfig $MetricsConfig
 * @property Shapes\ProvisionedPollerConfig $ProvisionedPollerConfig
 */
class CreateEventSourceMappingRequest extends Request
{
    /**
     * @param array{
     *     EventSourceArn?: string,
     *     FunctionName: string,
     *     Enabled?: bool,
     *     BatchSize?: int<1, 10000>,
     *     FilterCriteria?: Shapes\FilterCriteria,
     *     MaximumBatchingWindowInSeconds?: int<0, 300>,
     *     ParallelizationFactor?: int<1, 10>,
     *     StartingPosition?: 'TRIM_HORIZON'|'LATEST'|'AT_TIMESTAMP',
     *     StartingPositionTimestamp?: \Aws\Api\DateTimeResult,
     *     DestinationConfig?: Shapes\DestinationConfig,
     *     MaximumRecordAgeInSeconds?: int<-1, 604800>,
     *     BisectBatchOnFunctionError?: bool,
     *     MaximumRetryAttempts?: int<-1, 10000>,
     *     Tags?: array<string, string>,
     *     TumblingWindowInSeconds?: int<0, 900>,
     *     Topics?: list<string>,
     *     Queues?: list<string>,
     *     SourceAccessConfigurations?: list<Shapes\SourceAccessConfiguration>,
     *     SelfManagedEventSource?: Shapes\SelfManagedEventSource,
     *     FunctionResponseTypes?: list<'ReportBatchItemFailures'>,
     *     AmazonManagedKafkaEventSourceConfig?: Shapes\AmazonManagedKafkaEventSourceConfig,
     *     SelfManagedKafkaEventSourceConfig?: Shapes\SelfManagedKafkaEventSourceConfig,
     *     ScalingConfig?: Shapes\ScalingConfig,
     *     DocumentDBEventSourceConfig?: Shapes\DocumentDBEventSourceConfig,
     *     KMSKeyArn?: string,
     *     MetricsConfig?: Shapes\EventSourceMappingMetricsConfig,
     *     ProvisionedPollerConfig?: Shapes\ProvisionedPollerConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
