<?php

namespace Sunaoka\Aws\Structures\MainframeModernization;

class MainframeModernizationClient extends \Aws\MainframeModernization\MainframeModernizationClient
{
    use CancelBatchJobExecution\CancelBatchJobExecutionTrait;
    use CreateApplication\CreateApplicationTrait;
    use CreateDataSetImportTask\CreateDataSetImportTaskTrait;
    use CreateDeployment\CreateDeploymentTrait;
    use CreateEnvironment\CreateEnvironmentTrait;
    use DeleteApplication\DeleteApplicationTrait;
    use DeleteApplicationFromEnvironment\DeleteApplicationFromEnvironmentTrait;
    use DeleteEnvironment\DeleteEnvironmentTrait;
    use GetApplication\GetApplicationTrait;
    use GetApplicationVersion\GetApplicationVersionTrait;
    use GetBatchJobExecution\GetBatchJobExecutionTrait;
    use GetDataSetDetails\GetDataSetDetailsTrait;
    use GetDataSetImportTask\GetDataSetImportTaskTrait;
    use GetDeployment\GetDeploymentTrait;
    use GetEnvironment\GetEnvironmentTrait;
    use GetSignedBluinsightsUrl\GetSignedBluinsightsUrlTrait;
    use ListApplicationVersions\ListApplicationVersionsTrait;
    use ListApplications\ListApplicationsTrait;
    use ListBatchJobDefinitions\ListBatchJobDefinitionsTrait;
    use ListBatchJobExecutions\ListBatchJobExecutionsTrait;
    use ListBatchJobRestartPoints\ListBatchJobRestartPointsTrait;
    use ListDataSetImportHistory\ListDataSetImportHistoryTrait;
    use ListDataSets\ListDataSetsTrait;
    use ListDeployments\ListDeploymentsTrait;
    use ListEngineVersions\ListEngineVersionsTrait;
    use ListEnvironments\ListEnvironmentsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use StartApplication\StartApplicationTrait;
    use StartBatchJob\StartBatchJobTrait;
    use StopApplication\StopApplicationTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateApplication\UpdateApplicationTrait;
    use UpdateEnvironment\UpdateEnvironmentTrait;
}
