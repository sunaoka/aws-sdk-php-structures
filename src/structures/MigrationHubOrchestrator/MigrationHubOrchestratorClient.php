<?php

namespace Sunaoka\Aws\Structures\MigrationHubOrchestrator;

class MigrationHubOrchestratorClient extends \Aws\MigrationHubOrchestrator\MigrationHubOrchestratorClient
{
    use CreateWorkflow\CreateWorkflowTrait;
    use CreateWorkflowStep\CreateWorkflowStepTrait;
    use CreateWorkflowStepGroup\CreateWorkflowStepGroupTrait;
    use DeleteWorkflow\DeleteWorkflowTrait;
    use DeleteWorkflowStep\DeleteWorkflowStepTrait;
    use DeleteWorkflowStepGroup\DeleteWorkflowStepGroupTrait;
    use GetTemplate\GetTemplateTrait;
    use GetTemplateStep\GetTemplateStepTrait;
    use GetTemplateStepGroup\GetTemplateStepGroupTrait;
    use GetWorkflow\GetWorkflowTrait;
    use GetWorkflowStep\GetWorkflowStepTrait;
    use GetWorkflowStepGroup\GetWorkflowStepGroupTrait;
    use ListPlugins\ListPluginsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use ListTemplateStepGroups\ListTemplateStepGroupsTrait;
    use ListTemplateSteps\ListTemplateStepsTrait;
    use ListTemplates\ListTemplatesTrait;
    use ListWorkflowStepGroups\ListWorkflowStepGroupsTrait;
    use ListWorkflowSteps\ListWorkflowStepsTrait;
    use ListWorkflows\ListWorkflowsTrait;
    use RetryWorkflowStep\RetryWorkflowStepTrait;
    use StartWorkflow\StartWorkflowTrait;
    use StopWorkflow\StopWorkflowTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateWorkflow\UpdateWorkflowTrait;
    use UpdateWorkflowStep\UpdateWorkflowStepTrait;
    use UpdateWorkflowStepGroup\UpdateWorkflowStepGroupTrait;
}
