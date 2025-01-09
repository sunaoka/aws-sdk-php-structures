<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\ExportLicenseRecommendations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $accountIds
 * @property list<Shapes\LicenseRecommendationFilter> $filters
 * @property list<'AccountId'|'ResourceArn'|'LookbackPeriodInDays'|'LastRefreshTimestamp'|'Finding'|'FindingReasonCodes'|'CurrentLicenseConfigurationNumberOfCores'|'CurrentLicenseConfigurationInstanceType'|'CurrentLicenseConfigurationOperatingSystem'|'CurrentLicenseConfigurationLicenseName'|'CurrentLicenseConfigurationLicenseEdition'|'CurrentLicenseConfigurationLicenseModel'|'CurrentLicenseConfigurationLicenseVersion'|'CurrentLicenseConfigurationMetricsSource'|'RecommendationOptionsOperatingSystem'|'RecommendationOptionsLicenseEdition'|'RecommendationOptionsLicenseModel'|'RecommendationOptionsSavingsOpportunityPercentage'|'RecommendationOptionsEstimatedMonthlySavingsCurrency'|'RecommendationOptionsEstimatedMonthlySavingsValue'|'Tags'> $fieldsToExport
 * @property Shapes\S3DestinationConfig $s3DestinationConfig
 * @property 'Csv' $fileFormat
 * @property bool $includeMemberAccounts
 */
class ExportLicenseRecommendationsRequest extends Request
{
    /**
     * @param array{
     *     accountIds?: list<string>,
     *     filters?: list<Shapes\LicenseRecommendationFilter>,
     *     fieldsToExport?: list<'AccountId'|'ResourceArn'|'LookbackPeriodInDays'|'LastRefreshTimestamp'|'Finding'|'FindingReasonCodes'|'CurrentLicenseConfigurationNumberOfCores'|'CurrentLicenseConfigurationInstanceType'|'CurrentLicenseConfigurationOperatingSystem'|'CurrentLicenseConfigurationLicenseName'|'CurrentLicenseConfigurationLicenseEdition'|'CurrentLicenseConfigurationLicenseModel'|'CurrentLicenseConfigurationLicenseVersion'|'CurrentLicenseConfigurationMetricsSource'|'RecommendationOptionsOperatingSystem'|'RecommendationOptionsLicenseEdition'|'RecommendationOptionsLicenseModel'|'RecommendationOptionsSavingsOpportunityPercentage'|'RecommendationOptionsEstimatedMonthlySavingsCurrency'|'RecommendationOptionsEstimatedMonthlySavingsValue'|'Tags'>,
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
