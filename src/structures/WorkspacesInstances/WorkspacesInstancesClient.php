<?php

namespace Sunaoka\Aws\Structures\WorkspacesInstances;

class WorkspacesInstancesClient extends \Aws\WorkspacesInstances\WorkspacesInstancesClient
{
    use AssociateVolume\AssociateVolumeTrait;
    use CreateVolume\CreateVolumeTrait;
    use CreateWorkspaceInstance\CreateWorkspaceInstanceTrait;
    use DeleteVolume\DeleteVolumeTrait;
    use DeleteWorkspaceInstance\DeleteWorkspaceInstanceTrait;
    use DisassociateVolume\DisassociateVolumeTrait;
    use GetWorkspaceInstance\GetWorkspaceInstanceTrait;
    use ListInstanceTypes\ListInstanceTypesTrait;
    use ListRegions\ListRegionsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use ListWorkspaceInstances\ListWorkspaceInstancesTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
}
