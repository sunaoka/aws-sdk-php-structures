<?php

namespace Sunaoka\Aws\Structures\RoboMaker;

class RoboMakerClient extends \Aws\RoboMaker\RoboMakerClient
{
    use BatchDeleteWorlds\BatchDeleteWorldsTrait;
    use BatchDescribeSimulationJob\BatchDescribeSimulationJobTrait;
    use CancelDeploymentJob\CancelDeploymentJobTrait;
    use CancelSimulationJob\CancelSimulationJobTrait;
    use CancelSimulationJobBatch\CancelSimulationJobBatchTrait;
    use CancelWorldExportJob\CancelWorldExportJobTrait;
    use CancelWorldGenerationJob\CancelWorldGenerationJobTrait;
    use CreateDeploymentJob\CreateDeploymentJobTrait;
    use CreateFleet\CreateFleetTrait;
    use CreateRobot\CreateRobotTrait;
    use CreateRobotApplication\CreateRobotApplicationTrait;
    use CreateRobotApplicationVersion\CreateRobotApplicationVersionTrait;
    use CreateSimulationApplication\CreateSimulationApplicationTrait;
    use CreateSimulationApplicationVersion\CreateSimulationApplicationVersionTrait;
    use CreateSimulationJob\CreateSimulationJobTrait;
    use CreateWorldExportJob\CreateWorldExportJobTrait;
    use CreateWorldGenerationJob\CreateWorldGenerationJobTrait;
    use CreateWorldTemplate\CreateWorldTemplateTrait;
    use DeleteFleet\DeleteFleetTrait;
    use DeleteRobot\DeleteRobotTrait;
    use DeleteRobotApplication\DeleteRobotApplicationTrait;
    use DeleteSimulationApplication\DeleteSimulationApplicationTrait;
    use DeleteWorldTemplate\DeleteWorldTemplateTrait;
    use DeregisterRobot\DeregisterRobotTrait;
    use DescribeDeploymentJob\DescribeDeploymentJobTrait;
    use DescribeFleet\DescribeFleetTrait;
    use DescribeRobot\DescribeRobotTrait;
    use DescribeRobotApplication\DescribeRobotApplicationTrait;
    use DescribeSimulationApplication\DescribeSimulationApplicationTrait;
    use DescribeSimulationJob\DescribeSimulationJobTrait;
    use DescribeSimulationJobBatch\DescribeSimulationJobBatchTrait;
    use DescribeWorld\DescribeWorldTrait;
    use DescribeWorldExportJob\DescribeWorldExportJobTrait;
    use DescribeWorldGenerationJob\DescribeWorldGenerationJobTrait;
    use DescribeWorldTemplate\DescribeWorldTemplateTrait;
    use GetWorldTemplateBody\GetWorldTemplateBodyTrait;
    use ListDeploymentJobs\ListDeploymentJobsTrait;
    use ListFleets\ListFleetsTrait;
    use ListRobotApplications\ListRobotApplicationsTrait;
    use ListRobots\ListRobotsTrait;
    use ListSimulationApplications\ListSimulationApplicationsTrait;
    use ListSimulationJobBatches\ListSimulationJobBatchesTrait;
    use ListSimulationJobs\ListSimulationJobsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use ListWorldExportJobs\ListWorldExportJobsTrait;
    use ListWorldGenerationJobs\ListWorldGenerationJobsTrait;
    use ListWorldTemplates\ListWorldTemplatesTrait;
    use ListWorlds\ListWorldsTrait;
    use RegisterRobot\RegisterRobotTrait;
    use RestartSimulationJob\RestartSimulationJobTrait;
    use StartSimulationJobBatch\StartSimulationJobBatchTrait;
    use SyncDeploymentJob\SyncDeploymentJobTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateRobotApplication\UpdateRobotApplicationTrait;
    use UpdateSimulationApplication\UpdateSimulationApplicationTrait;
    use UpdateWorldTemplate\UpdateWorldTemplateTrait;
}
