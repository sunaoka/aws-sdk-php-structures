<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\ExportIdleRecommendations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $accountIds
 * @property list<Shapes\IdleRecommendationFilter> $filters
 * @property list<'AccountId'|'ResourceArn'|'ResourceId'|'ResourceType'|'LastRefreshTimestamp'|'LookbackPeriodInDays'|'SavingsOpportunity'|'SavingsOpportunityAfterDiscount'|'UtilizationMetricsCpuMaximum'|'UtilizationMetricsMemoryMaximum'|'UtilizationMetricsNetworkOutBytesPerSecondMaximum'|'UtilizationMetricsNetworkInBytesPerSecondMaximum'|'UtilizationMetricsDatabaseConnectionsMaximum'|'UtilizationMetricsEBSVolumeReadIOPSMaximum'|'UtilizationMetricsEBSVolumeWriteIOPSMaximum'|'UtilizationMetricsVolumeReadOpsPerSecondMaximum'|'UtilizationMetricsVolumeWriteOpsPerSecondMaximum'|'Finding'|'FindingDescription'|'Tags'> $fieldsToExport
 * @property Shapes\S3DestinationConfig $s3DestinationConfig
 * @property 'Csv' $fileFormat
 * @property bool $includeMemberAccounts
 */
class ExportIdleRecommendationsRequest extends Request
{
    /**
     * @param array{
     *     accountIds?: list<string>,
     *     filters?: list<Shapes\IdleRecommendationFilter>,
     *     fieldsToExport?: list<'AccountId'|'ResourceArn'|'ResourceId'|'ResourceType'|'LastRefreshTimestamp'|'LookbackPeriodInDays'|'SavingsOpportunity'|'SavingsOpportunityAfterDiscount'|'UtilizationMetricsCpuMaximum'|'UtilizationMetricsMemoryMaximum'|'UtilizationMetricsNetworkOutBytesPerSecondMaximum'|'UtilizationMetricsNetworkInBytesPerSecondMaximum'|'UtilizationMetricsDatabaseConnectionsMaximum'|'UtilizationMetricsEBSVolumeReadIOPSMaximum'|'UtilizationMetricsEBSVolumeWriteIOPSMaximum'|'UtilizationMetricsVolumeReadOpsPerSecondMaximum'|'UtilizationMetricsVolumeWriteOpsPerSecondMaximum'|'Finding'|'FindingDescription'|'Tags'>,
     *     s3DestinationConfig: Shapes\S3DestinationConfig,
     *     fileFormat?: 'Csv',
     *     includeMemberAccounts?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
