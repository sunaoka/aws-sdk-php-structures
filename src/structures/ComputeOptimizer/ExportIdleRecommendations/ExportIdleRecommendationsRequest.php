<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\ExportIdleRecommendations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $accountIds
 * @property list<Shapes\IdleRecommendationFilter>|null $filters
 * @property list<'AccountId'|'ResourceArn'|'ResourceId'|'ResourceType'|'LastRefreshTimestamp'|'LookbackPeriodInDays'|'SavingsOpportunity'|'SavingsOpportunityAfterDiscount'|'UtilizationMetricsCpuMaximum'|'UtilizationMetricsMemoryMaximum'|'UtilizationMetricsNetworkOutBytesPerSecondMaximum'|'UtilizationMetricsNetworkInBytesPerSecondMaximum'|'UtilizationMetricsDatabaseConnectionsMaximum'|'UtilizationMetricsEBSVolumeReadIOPSMaximum'|'UtilizationMetricsEBSVolumeWriteIOPSMaximum'|'UtilizationMetricsVolumeReadOpsPerSecondMaximum'|'UtilizationMetricsVolumeWriteOpsPerSecondMaximum'|'UtilizationMetricsActiveConnectionCountMaximum'|'UtilizationMetricsPacketsInFromSourceMaximum'|'UtilizationMetricsPacketsInFromDestinationMaximum'|'Finding'|'FindingDescription'|'Tags'>|null $fieldsToExport
 * @property Shapes\S3DestinationConfig $s3DestinationConfig
 * @property 'Csv'|null $fileFormat
 * @property bool|null $includeMemberAccounts
 */
class ExportIdleRecommendationsRequest extends Request
{
    /**
     * @param array{
     *     accountIds?: list<string>|null,
     *     filters?: list<Shapes\IdleRecommendationFilter>|null,
     *     fieldsToExport?: list<'AccountId'|'ResourceArn'|'ResourceId'|'ResourceType'|'LastRefreshTimestamp'|'LookbackPeriodInDays'|'SavingsOpportunity'|'SavingsOpportunityAfterDiscount'|'UtilizationMetricsCpuMaximum'|'UtilizationMetricsMemoryMaximum'|'UtilizationMetricsNetworkOutBytesPerSecondMaximum'|'UtilizationMetricsNetworkInBytesPerSecondMaximum'|'UtilizationMetricsDatabaseConnectionsMaximum'|'UtilizationMetricsEBSVolumeReadIOPSMaximum'|'UtilizationMetricsEBSVolumeWriteIOPSMaximum'|'UtilizationMetricsVolumeReadOpsPerSecondMaximum'|'UtilizationMetricsVolumeWriteOpsPerSecondMaximum'|'UtilizationMetricsActiveConnectionCountMaximum'|'UtilizationMetricsPacketsInFromSourceMaximum'|'UtilizationMetricsPacketsInFromDestinationMaximum'|'Finding'|'FindingDescription'|'Tags'>|null,
     *     s3DestinationConfig: Shapes\S3DestinationConfig,
     *     fileFormat?: 'Csv'|null,
     *     includeMemberAccounts?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
