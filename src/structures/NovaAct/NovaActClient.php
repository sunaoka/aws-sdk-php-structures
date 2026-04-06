<?php

namespace Sunaoka\Aws\Structures\NovaAct;

class NovaActClient extends \Aws\NovaAct\NovaActClient
{
    use CreateAct\CreateActTrait;
    use CreateSession\CreateSessionTrait;
    use CreateWorkflowDefinition\CreateWorkflowDefinitionTrait;
    use CreateWorkflowRun\CreateWorkflowRunTrait;
    use DeleteWorkflowDefinition\DeleteWorkflowDefinitionTrait;
    use DeleteWorkflowRun\DeleteWorkflowRunTrait;
    use GetWorkflowDefinition\GetWorkflowDefinitionTrait;
    use GetWorkflowRun\GetWorkflowRunTrait;
    use InvokeActStep\InvokeActStepTrait;
    use ListActs\ListActsTrait;
    use ListModels\ListModelsTrait;
    use ListSessions\ListSessionsTrait;
    use ListWorkflowDefinitions\ListWorkflowDefinitionsTrait;
    use ListWorkflowRuns\ListWorkflowRunsTrait;
    use UpdateAct\UpdateActTrait;
    use UpdateWorkflowRun\UpdateWorkflowRunTrait;
}
