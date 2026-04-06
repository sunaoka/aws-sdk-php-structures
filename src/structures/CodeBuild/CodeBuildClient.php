<?php

namespace Sunaoka\Aws\Structures\CodeBuild;

class CodeBuildClient extends \Aws\CodeBuild\CodeBuildClient
{
    use BatchDeleteBuilds\BatchDeleteBuildsTrait;
    use BatchGetBuildBatches\BatchGetBuildBatchesTrait;
    use BatchGetBuilds\BatchGetBuildsTrait;
    use BatchGetProjects\BatchGetProjectsTrait;
    use BatchGetReportGroups\BatchGetReportGroupsTrait;
    use BatchGetReports\BatchGetReportsTrait;
    use CreateProject\CreateProjectTrait;
    use CreateReportGroup\CreateReportGroupTrait;
    use CreateWebhook\CreateWebhookTrait;
    use DeleteBuildBatch\DeleteBuildBatchTrait;
    use DeleteProject\DeleteProjectTrait;
    use DeleteReport\DeleteReportTrait;
    use DeleteReportGroup\DeleteReportGroupTrait;
    use DeleteResourcePolicy\DeleteResourcePolicyTrait;
    use DeleteSourceCredentials\DeleteSourceCredentialsTrait;
    use DeleteWebhook\DeleteWebhookTrait;
    use DescribeCodeCoverages\DescribeCodeCoveragesTrait;
    use DescribeTestCases\DescribeTestCasesTrait;
    use GetReportGroupTrend\GetReportGroupTrendTrait;
    use GetResourcePolicy\GetResourcePolicyTrait;
    use ImportSourceCredentials\ImportSourceCredentialsTrait;
    use InvalidateProjectCache\InvalidateProjectCacheTrait;
    use ListBuildBatches\ListBuildBatchesTrait;
    use ListBuildBatchesForProject\ListBuildBatchesForProjectTrait;
    use ListBuilds\ListBuildsTrait;
    use ListBuildsForProject\ListBuildsForProjectTrait;
    use ListCuratedEnvironmentImages\ListCuratedEnvironmentImagesTrait;
    use ListProjects\ListProjectsTrait;
    use ListReportGroups\ListReportGroupsTrait;
    use ListReports\ListReportsTrait;
    use ListReportsForReportGroup\ListReportsForReportGroupTrait;
    use ListSharedProjects\ListSharedProjectsTrait;
    use ListSharedReportGroups\ListSharedReportGroupsTrait;
    use ListSourceCredentials\ListSourceCredentialsTrait;
    use PutResourcePolicy\PutResourcePolicyTrait;
    use RetryBuild\RetryBuildTrait;
    use RetryBuildBatch\RetryBuildBatchTrait;
    use StartBuild\StartBuildTrait;
    use StartBuildBatch\StartBuildBatchTrait;
    use StopBuild\StopBuildTrait;
    use StopBuildBatch\StopBuildBatchTrait;
    use UpdateProject\UpdateProjectTrait;
    use UpdateProjectVisibility\UpdateProjectVisibilityTrait;
    use UpdateReportGroup\UpdateReportGroupTrait;
    use UpdateWebhook\UpdateWebhookTrait;
}
