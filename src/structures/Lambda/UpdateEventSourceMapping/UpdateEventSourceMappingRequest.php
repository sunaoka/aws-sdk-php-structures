<?php

namespace Sunaoka\Aws\Structures\Lambda\UpdateEventSourceMapping;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UUID
 * @property string $FunctionName
 * @property bool $Enabled
 * @property int $BatchSize
 * @property Shapes\FilterCriteria $FilterCriteria
 * @property int $MaximumBatchingWindowInSeconds
 * @property Shapes\DestinationConfig $DestinationConfig
 * @property int $MaximumRecordAgeInSeconds
 * @property bool $BisectBatchOnFunctionError
 * @property int $MaximumRetryAttempts
 * @property int $ParallelizationFactor
 * @property list<Shapes\SourceAccessConfiguration> $SourceAccessConfigurations
 * @property int $TumblingWindowInSeconds
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
     *     BatchSize?: int,
     *     FilterCriteria?: Shapes\FilterCriteria,
     *     MaximumBatchingWindowInSeconds?: int,
     *     DestinationConfig?: Shapes\DestinationConfig,
     *     MaximumRecordAgeInSeconds?: int,
     *     BisectBatchOnFunctionError?: bool,
     *     MaximumRetryAttempts?: int,
     *     ParallelizationFactor?: int,
     *     SourceAccessConfigurations?: list<Shapes\SourceAccessConfiguration>,
     *     TumblingWindowInSeconds?: int,
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
