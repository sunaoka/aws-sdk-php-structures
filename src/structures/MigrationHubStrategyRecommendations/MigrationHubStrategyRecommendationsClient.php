<?php

namespace Sunaoka\Aws\Structures\MigrationHubStrategyRecommendations;

class MigrationHubStrategyRecommendationsClient extends \Aws\MigrationHubStrategyRecommendations\MigrationHubStrategyRecommendationsClient
{
    use GetApplicationComponentDetails\GetApplicationComponentDetailsTrait;
    use GetApplicationComponentStrategies\GetApplicationComponentStrategiesTrait;
    use GetAssessment\GetAssessmentTrait;
    use GetImportFileTask\GetImportFileTaskTrait;
    use GetLatestAssessmentId\GetLatestAssessmentIdTrait;
    use GetPortfolioPreferences\GetPortfolioPreferencesTrait;
    use GetPortfolioSummary\GetPortfolioSummaryTrait;
    use GetRecommendationReportDetails\GetRecommendationReportDetailsTrait;
    use GetServerDetails\GetServerDetailsTrait;
    use GetServerStrategies\GetServerStrategiesTrait;
    use ListAnalyzableServers\ListAnalyzableServersTrait;
    use ListApplicationComponents\ListApplicationComponentsTrait;
    use ListCollectors\ListCollectorsTrait;
    use ListImportFileTask\ListImportFileTaskTrait;
    use ListServers\ListServersTrait;
    use PutPortfolioPreferences\PutPortfolioPreferencesTrait;
    use StartAssessment\StartAssessmentTrait;
    use StartImportFileTask\StartImportFileTaskTrait;
    use StartRecommendationReportGeneration\StartRecommendationReportGenerationTrait;
    use StopAssessment\StopAssessmentTrait;
    use UpdateApplicationComponentConfig\UpdateApplicationComponentConfigTrait;
    use UpdateServerConfig\UpdateServerConfigTrait;
}
