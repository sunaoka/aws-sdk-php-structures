<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer;

class ComputeOptimizerClient extends \Aws\ComputeOptimizer\ComputeOptimizerClient
{
    use DeleteRecommendationPreferences\DeleteRecommendationPreferencesTrait;
    use DescribeRecommendationExportJobs\DescribeRecommendationExportJobsTrait;
    use ExportAutoScalingGroupRecommendations\ExportAutoScalingGroupRecommendationsTrait;
    use ExportEBSVolumeRecommendations\ExportEBSVolumeRecommendationsTrait;
    use ExportEC2InstanceRecommendations\ExportEC2InstanceRecommendationsTrait;
    use ExportECSServiceRecommendations\ExportECSServiceRecommendationsTrait;
    use ExportLambdaFunctionRecommendations\ExportLambdaFunctionRecommendationsTrait;
    use GetAutoScalingGroupRecommendations\GetAutoScalingGroupRecommendationsTrait;
    use GetEBSVolumeRecommendations\GetEBSVolumeRecommendationsTrait;
    use GetEC2InstanceRecommendations\GetEC2InstanceRecommendationsTrait;
    use GetEC2RecommendationProjectedMetrics\GetEC2RecommendationProjectedMetricsTrait;
    use GetECSServiceRecommendationProjectedMetrics\GetECSServiceRecommendationProjectedMetricsTrait;
    use GetECSServiceRecommendations\GetECSServiceRecommendationsTrait;
    use GetEffectiveRecommendationPreferences\GetEffectiveRecommendationPreferencesTrait;
    use GetEnrollmentStatus\GetEnrollmentStatusTrait;
    use GetEnrollmentStatusesForOrganization\GetEnrollmentStatusesForOrganizationTrait;
    use GetLambdaFunctionRecommendations\GetLambdaFunctionRecommendationsTrait;
    use GetRecommendationPreferences\GetRecommendationPreferencesTrait;
    use GetRecommendationSummaries\GetRecommendationSummariesTrait;
    use PutRecommendationPreferences\PutRecommendationPreferencesTrait;
    use UpdateEnrollmentStatus\UpdateEnrollmentStatusTrait;
}
