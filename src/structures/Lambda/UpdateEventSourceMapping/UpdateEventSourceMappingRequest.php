<?php

namespace Sunaoka\Aws\Structures\Lambda\UpdateEventSourceMapping;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UUID
 * @property string $FunctionName
 * @property bool $Enabled
 * @property int<1, 10000> $BatchSize
 * @property Shapes\FilterCriteria $FilterCriteria
 * @property int<0, 300> $MaximumBatchingWindowInSeconds
 * @property Shapes\DestinationConfig $DestinationConfig
 * @property int<-1, 604800> $MaximumRecordAgeInSeconds
 * @property bool $BisectBatchOnFunctionError
 * @property int<-1, 10000> $MaximumRetryAttempts
 * @property int<1, 10> $ParallelizationFactor
 * @property list<Shapes\SourceAccessConfiguration> $SourceAccessConfigurations
 * @property int<0, 900> $TumblingWindowInSeconds
 * @property list<'ReportBatchItemFailures'> $FunctionResponseTypes
 * @property Shapes\ScalingConfig $ScalingConfig
 * @property Shapes\DocumentDBEventSourceConfig $DocumentDBEventSourceConfig
 * @property string $KMSKeyArn
 * @property Shapes\EventSourceMappingMetricsConfig $MetricsConfig
 * @property Shapes\ProvisionedPollerConfig $ProvisionedPollerConfig
 */
class UpdateEventSourceMappingRequest extends Request
{
    /**
     * @param array{
     *     UUID: string,
     *     FunctionName?: string,
     *     Enabled?: bool,
     *     BatchSize?: int<1, 10000>,
     *     FilterCriteria?: Shapes\FilterCriteria,
     *     MaximumBatchingWindowInSeconds?: int<0, 300>,
     *     DestinationConfig?: Shapes\DestinationConfig,
     *     MaximumRecordAgeInSeconds?: int<-1, 604800>,
     *     BisectBatchOnFunctionError?: bool,
     *     MaximumRetryAttempts?: int<-1, 10000>,
     *     ParallelizationFactor?: int<1, 10>,
     *     SourceAccessConfigurations?: list<Shapes\SourceAccessConfiguration>,
     *     TumblingWindowInSeconds?: int<0, 900>,
     *     FunctionResponseTypes?: list<'ReportBatchItemFailures'>,
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
