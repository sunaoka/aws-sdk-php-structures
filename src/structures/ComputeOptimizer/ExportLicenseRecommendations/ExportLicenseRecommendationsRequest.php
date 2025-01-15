<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\ExportLicenseRecommendations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $accountIds
 * @property list<Shapes\LicenseRecommendationFilter>|null $filters
 * @property list<'AccountId'|'ResourceArn'|'LookbackPeriodInDays'|'LastRefreshTimestamp'|'Finding'|'FindingReasonCodes'|'CurrentLicenseConfigurationNumberOfCores'|'CurrentLicenseConfigurationInstanceType'|'CurrentLicenseConfigurationOperatingSystem'|'CurrentLicenseConfigurationLicenseName'|'CurrentLicenseConfigurationLicenseEdition'|'CurrentLicenseConfigurationLicenseModel'|'CurrentLicenseConfigurationLicenseVersion'|'CurrentLicenseConfigurationMetricsSource'|'RecommendationOptionsOperatingSystem'|'RecommendationOptionsLicenseEdition'|'RecommendationOptionsLicenseModel'|'RecommendationOptionsSavingsOpportunityPercentage'|'RecommendationOptionsEstimatedMonthlySavingsCurrency'|'RecommendationOptionsEstimatedMonthlySavingsValue'|'Tags'>|null $fieldsToExport
 * @property Shapes\S3DestinationConfig $s3DestinationConfig
 * @property 'Csv'|null $fileFormat
 * @property bool|null $includeMemberAccounts
 */
class ExportLicenseRecommendationsRequest extends Request
{
    /**
     * @param array{
     *     accountIds?: list<string>|null,
     *     filters?: list<Shapes\LicenseRecommendationFilter>|null,
     *     fieldsToExport?: list<'AccountId'|'ResourceArn'|'LookbackPeriodInDays'|'LastRefreshTimestamp'|'Finding'|'FindingReasonCodes'|'CurrentLicenseConfigurationNumberOfCores'|'CurrentLicenseConfigurationInstanceType'|'CurrentLicenseConfigurationOperatingSystem'|'CurrentLicenseConfigurationLicenseName'|'CurrentLicenseConfigurationLicenseEdition'|'CurrentLicenseConfigurationLicenseModel'|'CurrentLicenseConfigurationLicenseVersion'|'CurrentLicenseConfigurationMetricsSource'|'RecommendationOptionsOperatingSystem'|'RecommendationOptionsLicenseEdition'|'RecommendationOptionsLicenseModel'|'RecommendationOptionsSavingsOpportunityPercentage'|'RecommendationOptionsEstimatedMonthlySavingsCurrency'|'RecommendationOptionsEstimatedMonthlySavingsValue'|'Tags'>|null,
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
