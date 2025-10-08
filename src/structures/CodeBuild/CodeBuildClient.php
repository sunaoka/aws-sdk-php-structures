<?php

namespace Sunaoka\Aws\Structures\CodeBuild;

class CodeBuildClient extends \Aws\CodeBuild\CodeBuildClient
{
    use BatchDeleteBuilds\BatchDeleteBuildsTrait;
    use BatchGetBuildBatches\BatchGetBuildBatchesTrait;
    use BatchGetBuilds\BatchGetBuildsTrait;
    use BatchGetCommandExecutions\BatchGetCommandExecutionsTrait;
    use BatchGetFleets\BatchGetFleetsTrait;
    use BatchGetProjects\BatchGetProjectsTrait;
    use BatchGetReportGroups\BatchGetReportGroupsTrait;
    use BatchGetReports\BatchGetReportsTrait;
    use BatchGetSandboxes\BatchGetSandboxesTrait;
    use CreateFleet\CreateFleetTrait;
    use CreateProject\CreateProjectTrait;
    use CreateReportGroup\CreateReportGroupTrait;
    use CreateWebhook\CreateWebhookTrait;
    use DeleteBuildBatch\DeleteBuildBatchTrait;
    use DeleteFleet\DeleteFleetTrait;
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
    use ListCommandExecutionsForSandbox\ListCommandExecutionsForSandboxTrait;
    use ListCuratedEnvironmentImages\ListCuratedEnvironmentImagesTrait;
    use ListFleets\ListFleetsTrait;
    use ListProjects\ListProjectsTrait;
    use ListReportGroups\ListReportGroupsTrait;
    use ListReports\ListReportsTrait;
    use ListReportsForReportGroup\ListReportsForReportGroupTrait;
    use ListSandboxes\ListSandboxesTrait;
    use ListSandboxesForProject\ListSandboxesForProjectTrait;
    use ListSharedProjects\ListSharedProjectsTrait;
    use ListSharedReportGroups\ListSharedReportGroupsTrait;
    use ListSourceCredentials\ListSourceCredentialsTrait;
    use PutResourcePolicy\PutResourcePolicyTrait;
    use RetryBuild\RetryBuildTrait;
    use RetryBuildBatch\RetryBuildBatchTrait;
    use StartBuild\StartBuildTrait;
    use StartBuildBatch\StartBuildBatchTrait;
    use StartCommandExecution\StartCommandExecutionTrait;
    use StartSandbox\StartSandboxTrait;
    use StartSandboxConnection\StartSandboxConnectionTrait;
    use StopBuild\StopBuildTrait;
    use StopBuildBatch\StopBuildBatchTrait;
    use StopSandbox\StopSandboxTrait;
    use UpdateFleet\UpdateFleetTrait;
    use UpdateProject\UpdateProjectTrait;
    use UpdateProjectVisibility\UpdateProjectVisibilityTrait;
    use UpdateReportGroup\UpdateReportGroupTrait;
    use UpdateWebhook\UpdateWebhookTrait;
}
