<?php

namespace Sunaoka\Aws\Structures\MWAAServerless;

class MWAAServerlessClient extends \Aws\MWAAServerless\MWAAServerlessClient
{
    use CreateWorkflow\CreateWorkflowTrait;
    use DeleteWorkflow\DeleteWorkflowTrait;
    use GetTaskInstance\GetTaskInstanceTrait;
    use GetWorkflow\GetWorkflowTrait;
    use GetWorkflowRun\GetWorkflowRunTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use ListTaskInstances\ListTaskInstancesTrait;
    use ListWorkflowRuns\ListWorkflowRunsTrait;
    use ListWorkflowVersions\ListWorkflowVersionsTrait;
    use ListWorkflows\ListWorkflowsTrait;
    use StartWorkflowRun\StartWorkflowRunTrait;
    use StopWorkflowRun\StopWorkflowRunTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateWorkflow\UpdateWorkflowTrait;
}
