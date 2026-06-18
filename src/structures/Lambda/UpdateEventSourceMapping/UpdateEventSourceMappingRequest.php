<?php

namespace Sunaoka\Aws\Structures\Lambda\UpdateEventSourceMapping;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UUID
 * @property string|null $FunctionName
 * @property bool|null $Enabled
 * @property int<1, 10000>|null $BatchSize
 * @property Shapes\FilterCriteria|null $FilterCriteria
 * @property string|null $KMSKeyArn
 * @property Shapes\EventSourceMappingMetricsConfig|null $MetricsConfig
 * @property Shapes\EventSourceMappingLoggingConfig|null $LoggingConfig
 * @property Shapes\ScalingConfig|null $ScalingConfig
 * @property int<0, 300>|null $MaximumBatchingWindowInSeconds
 * @property int<1, 10>|null $ParallelizationFactor
 * @property Shapes\DestinationConfig|null $DestinationConfig
 * @property int<-1, 604800>|null $MaximumRecordAgeInSeconds
 * @property bool|null $BisectBatchOnFunctionError
 * @property int<-1, 10000>|null $MaximumRetryAttempts
 * @property int<0, 900>|null $TumblingWindowInSeconds
 * @property list<Shapes\SourceAccessConfiguration>|null $SourceAccessConfigurations
 * @property list<'ReportBatchItemFailures'>|null $FunctionResponseTypes
 * @property Shapes\AmazonManagedKafkaEventSourceConfig|null $AmazonManagedKafkaEventSourceConfig
 * @property Shapes\SelfManagedKafkaEventSourceConfig|null $SelfManagedKafkaEventSourceConfig
 * @property Shapes\DocumentDBEventSourceConfig|null $DocumentDBEventSourceConfig
 * @property Shapes\ProvisionedPollerConfig|null $ProvisionedPollerConfig
 */
class UpdateEventSourceMappingRequest extends Request
{
    /**
     * @param array{
     *     UUID: string,
     *     FunctionName?: string|null,
     *     Enabled?: bool|null,
     *     BatchSize?: int<1, 10000>|null,
     *     FilterCriteria?: Shapes\FilterCriteria|null,
     *     KMSKeyArn?: string|null,
     *     MetricsConfig?: Shapes\EventSourceMappingMetricsConfig|null,
     *     LoggingConfig?: Shapes\EventSourceMappingLoggingConfig|null,
     *     ScalingConfig?: Shapes\ScalingConfig|null,
     *     MaximumBatchingWindowInSeconds?: int<0, 300>|null,
     *     ParallelizationFactor?: int<1, 10>|null,
     *     DestinationConfig?: Shapes\DestinationConfig|null,
     *     MaximumRecordAgeInSeconds?: int<-1, 604800>|null,
     *     BisectBatchOnFunctionError?: bool|null,
     *     MaximumRetryAttempts?: int<-1, 10000>|null,
     *     TumblingWindowInSeconds?: int<0, 900>|null,
     *     SourceAccessConfigurations?: list<Shapes\SourceAccessConfiguration>|null,
     *     FunctionResponseTypes?: list<'ReportBatchItemFailures'>|null,
     *     AmazonManagedKafkaEventSourceConfig?: Shapes\AmazonManagedKafkaEventSourceConfig|null,
     *     SelfManagedKafkaEventSourceConfig?: Shapes\SelfManagedKafkaEventSourceConfig|null,
     *     DocumentDBEventSourceConfig?: Shapes\DocumentDBEventSourceConfig|null,
     *     ProvisionedPollerConfig?: Shapes\ProvisionedPollerConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
