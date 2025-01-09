<?php

namespace Sunaoka\Aws\Structures\Lambda\CreateEventSourceMapping;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EventSourceArn
 * @property string $FunctionName
 * @property bool $Enabled
 * @property int $BatchSize
 * @property Shapes\FilterCriteria $FilterCriteria
 * @property int $MaximumBatchingWindowInSeconds
 * @property int $ParallelizationFactor
 * @property 'TRIM_HORIZON'|'LATEST'|'AT_TIMESTAMP' $StartingPosition
 * @property \Aws\Api\DateTimeResult $StartingPositionTimestamp
 * @property Shapes\DestinationConfig $DestinationConfig
 * @property int $MaximumRecordAgeInSeconds
 * @property bool $BisectBatchOnFunctionError
 * @property int $MaximumRetryAttempts
 * @property array<string, string> $Tags
 * @property int $TumblingWindowInSeconds
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
     *     BatchSize?: int,
     *     FilterCriteria?: Shapes\FilterCriteria,
     *     MaximumBatchingWindowInSeconds?: int,
     *     ParallelizationFactor?: int,
     *     StartingPosition?: 'TRIM_HORIZON'|'LATEST'|'AT_TIMESTAMP',
     *     StartingPositionTimestamp?: \Aws\Api\DateTimeResult,
     *     DestinationConfig?: Shapes\DestinationConfig,
     *     MaximumRecordAgeInSeconds?: int,
     *     BisectBatchOnFunctionError?: bool,
     *     MaximumRetryAttempts?: int,
     *     Tags?: array<string, string>,
     *     TumblingWindowInSeconds?: int,
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
